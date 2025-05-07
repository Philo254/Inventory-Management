<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

/**Route::get('/', function () {
    return view('welcome');
});**/



Route::get('/', function () {
    return view('layout');
});
Route::resource("/products", ProductController::class);
Route::resource("/orders", OrderController::class);

