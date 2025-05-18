<?php

use App\Http\Controllers\Api\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
// Route untuk menampilkan semua layanan di service.blade.php
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/order', [TransactionController::class, 'index']);

Route::get('/service/detail/{id}', [ServiceController::class, 'show']);

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/order/detail', function () {
    return view('pages.order_detail');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

// Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

