<?php

namespace App\Http\Controllers\Order;

use App\Helpers\Transactions\snapHelper;
use App\Http\Controllers\Controller;
use App\Models\Order\Snap;
use App\Models\Order\Transaction;
use App\Models\Package\Package;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use snapHelper;

    public function index()
    {
        $packages = Package::whereNot('user_id', auth()->id())->get();
        return view('order.index', compact('packages'));
    }

    public function store(Package $package)
    {
        $snap_order = $this->getCharge(auth()->user(), $package, 'bni');

        return (int) $snap_order->status_code === 201
            && Snap::create($this->snapCreate($snap_order))
            && Transaction::create($this->snapTransaction($snap_order, $package))
            ? back()->with('success', 'Order successfully!')
            : back()->with('failed', 'Order failed!');
    }
}
