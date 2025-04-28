<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceViewController;
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
    return view('home');
});
// Route untuk menampilkan semua layanan di service.blade.php
Route::get('/services', [ServiceViewController::class, 'index'])->name('services.index');

Route::get('/order', function () {
    return view('order');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

