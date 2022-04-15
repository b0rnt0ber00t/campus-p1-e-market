<?php

namespace App\Helpers\Transactions;

use App\Models\Package\Package;
use App\Models\User;
use Illuminate\Support\Facades\Http;

/**
 * snapHelper
 */
trait snapHelper
{
  public function getCharge(User $user, Package $package, string $bank): object
  {
    $header = array(
      'Accept' => 'application/json',
      'Authorization' => 'Basic ' . base64_encode(env('MIDTRANS_SERVER_KEY')),
      'Content-Type' => 'application/json'
    );

    $data = array(
      'payment_type' => 'bank_transfer',
      'transaction_details' => array(
        'order_id' => str()->random(32),
        'gross_amount' => $package->price
      ),
      'bank_transfer' => array(
        'bank' => $bank
      ),
      'customer_details' => array(
        'first_name' => $user->name,
        'email' => $user->email,
        'phone' => $user->phone
      )
    );

    $response = Http::withHeaders($header)
      ->post(env('MIDTRANS_URL_SANDBOX'), $data);

    return $response->object();
  }

  public function snapCreate(Object $snap)
  {
    return array_merge((array) $snap, ['va_numbers' => json_encode($snap->va_numbers[0])]);
  }

  public function snapTransaction(object $snap, Package $package)
  {
    return array(
      'id' => $snap->transaction_id,
      'user_id' => auth()->id(),
      'package_id' => $package->id,
      'package_owner_id' => $package->user_id
    );
  }
}
