<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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
})->name('home');

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login-process', [UserController::class, 'login_process'])->name('login-process');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-process', [UserController::class, 'register_process'])->name('register-process');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


// Route untuk menampilkan semua layanan di service.blade.php
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/service/detail/{id}', [ServiceController::class, 'show']);




Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/order', [TransactionController::class, 'index'])->middleware('auth');
Route::get('/order/detail', function () {
    return view('pages.order_detail');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});



