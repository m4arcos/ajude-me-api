<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('donations')->group(function () {
    Route::get('/', [App\Http\Controllers\DonationController::class, 'index']);
    Route::post('/', [App\Http\Controllers\DonationController::class, 'create']);
    Route::get('/{id}', [App\Http\Controllers\DonationController::class, 'show']);
    Route::put('/{id}', [App\Http\Controllers\DonationController::class, 'edit']);
    Route::delete('/{id}', [App\Http\Controllers\DonationController::class, 'delete']);
});

Route::prefix('needs')->group(function () {
    Route::get('/', [App\Http\Controllers\NeedController::class, 'index']);
    Route::post('/', [App\Http\Controllers\NeedController::class, 'create']);
    Route::get('/{id}', [App\Http\Controllers\NeedController::class, 'show']);
    Route::put('/{id}', [App\Http\Controllers\NeedController::class, 'edit']);
    Route::delete('/{id}', [App\Http\Controllers\NeedController::class, 'delete']);
});