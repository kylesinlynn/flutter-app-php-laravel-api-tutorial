<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('category', [\App\Http\Controllers\Api\CategoryController::class, 'index_v1']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);

    Route::apiResource('transactions', \App\Http\Controllers\Api\TransactionController::class);
    
});

Route::post('auth/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('auth/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('auth/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
