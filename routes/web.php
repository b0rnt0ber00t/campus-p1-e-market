<?php

use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Package\PackageController;
use App\Http\Controllers\Package\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'welcome');
Route::redirect('/', '/login');

// Route::view('talent', 'talent');
// Route::view('detail-talent', 'detail-talent');
// Route::view('cart', 'cart');

Auth::routes(['auth', 'verify' => true]);

Route::middleware('auth', 'verified')->group(function () {
    // Home
    Route::get('home', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('home.index');

    // Package
    Route::resource('package', PackageController::class)->only('store');

    // Order
    Route::resource('order', OrderController::class)->only('index');
    Route::post('order/{package}', [OrderController::class, 'store'])->name('order.store');
});
