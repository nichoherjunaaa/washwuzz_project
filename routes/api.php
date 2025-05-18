<?php

use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/auth/logout', [UserController::class, 'logout']);

Route::get('service', [ServiceController::class, 'index']);
Route::get('service/detail/{id}', [ServiceController::class, 'show']);

// Admin Only
Route::post('services', [ServiceController::class, 'store']);
Route::put('services/{id}', [ServiceController::class, 'update']);
Route::delete('services/{id}', [ServiceController::class, 'destroy']);

// Auth Multi User
Route::post('auth/login', [UserController::class, 'login']);
Route::post('auth', [UserController::class, 'store']);

// Admin Only
Route::get('auth', [UserController::class, 'index']);
Route::get('auth/{id}', [UserController::class, 'show']);
Route::put('auth/{id}', [UserController::class, 'update']);
Route::delete('auth/{id}', [UserController::class, 'destroy']);

Route::post('order/store', [TransactionController::class, 'store']);
Route::get('order', [TransactionController::class, 'index']);
