<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

/**Route::get('/', function () {
    return view('welcome');
});**/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');




Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');





/**Route::get('/Dashboard', function () {
    return view('layout');
});**/

Route::resource("/products", ProductController::class);
Route::resource("/orders", OrderController::class);
Route::resource("/vendors", VendorController::class);
Route::get('vendor/datatable', [VendorController::class,'datatable'])->name('vendor.datatable');
//Route::resource("vendor.create", VendorController::class);
Route::resource("vendor.store", VendorController::class);








