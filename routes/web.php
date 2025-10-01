<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PurchaseController;


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
Route::resource("/purchase", PurchaseController::class);
//Route::get('purchase/datatable', [PurchaseController::class,'datatable'])->name('vendor.datatable');

Route::get('vendor/datatable', [VendorController::class,'datatable'])->name('vendor.datatable');
//Route::resource("vendor.create", VendorController::class);
Route::resource("vendor.store", VendorController::class);
Route::resource("vendor.update", VendorController::class);

Route::resource("purchase-order", PurchaseController::class);
Route::get ('purchase-order/vendor/popup_media','purchase-order@popup_media_vendor')->name('purchase-order/vendor/popup_media');











