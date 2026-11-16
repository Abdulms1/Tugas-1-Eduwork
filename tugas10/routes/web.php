<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Routes;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);


// Route::get('products', function () {
//     echo "Products Page";
// });

Route::get('cart', function () {
    echo "Cart Page";
});

Route::get('checkout', function () {
    echo "Checkout Page";
});