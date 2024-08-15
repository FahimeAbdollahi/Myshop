<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;



Route::resource('admins', AdminController::class);
Route::resource('sellers', SellerController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('categories', CategoryController::class);

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('place-order', [CartController::class, 'placeOrder'])->name('cart.placeOrder');

Route::get('/', function () {
    return view('welcome');
});
