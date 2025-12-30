<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Customer\ProdukController as CustomerProdukController;


Route::get('/dashboard', function () {
    return redirect('customer.dashboard');
});

/*
|--------------------------------------------------------------------------|
| AUTH
|--------------------------------------------------------------------------|
*/
Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------|
| ADMIN
|--------------------------------------------------------------------------|
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('/produk', ProdukController::class);

    Route::get('/order', [AdminOrderController::class, 'index'])
        ->name('order.index');

    Route::post('/order/{order}/status', [AdminOrderController::class, 'updateStatus'])
        ->name('order.status');

    Route::get('/order/{order}', [AdminOrderController::class, 'show'])
    ->name('order.show');

});

/*
|--------------------------------------------------------------------------|
| CUSTOMER
|--------------------------------------------------------------------------|
*/
Route::middleware(['auth'])->prefix('customer')->name('customer.')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', function () {
        return view('customer.dashboard');
    })->name('dashboard');

    // PRODUCTS
    Route::get('/products', [CustomerProdukController::class, 'index'])
        ->name('products');

    // CART
    Route::get('/cart', [OrderController::class, 'cart'])->name('cart');
    Route::post('/cart/add', [OrderController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{id}', [OrderController::class, 'removeFromCart'])->name('cart.remove');

    // CHECKOUT
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');

    Route::get('/orders', [OrderController::class, 'myOrders'])
        ->name('orders');

    Route::get('/orders', [OrderController::class, 'myOrders'])->name('orders');
    Route::get('/orders/{order}', [OrderController::class, 'orderDetail'])->name('orders.show');


});
