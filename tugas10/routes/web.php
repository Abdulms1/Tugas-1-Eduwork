<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('cart', [CartController::class, 'index']);

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// Route::get('products', function () {
//     echo "Products Page";
// });

// Route::get('cart', function () {
//     echo "Cart Page";
// });

// Route::get('checkout', function () {
//     echo "Checkout Page";
// });
