<?php

namespace App\Helpers\Transactions;

use Illuminate\Support\Facades\Http;

/**
 * snapHelper
 */
trait snapHelper
{
  public function getCharge(int $gross_amount, string $bank): object
  {
    $header = array(
      'Accept' => 'application/json',
      'Authorization' => base64_encode(env('MIDTRANS_SERVER_KEY')),
      'Content-Type' => 'application/json'
    );

    $data = array(
      'payment_type' => 'bank_transfer',
      'transaction_details' => array(
        'order_id' => str()->random(64),
        'gross_amount' => $gross_amount
      ),
      'bank_transfer' => array(
        'bank' => $bank
      )
    );

    $response = Http::withHeaders($header)
      ->post(env('MIDTRANS_URL_SANDBOX'), $data);

    return $response;
  }
}
