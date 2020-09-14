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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

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

Route::prefix('ongs')->group(function () {
    Route::get('/', [App\Http\Controllers\OngController::class, 'index']);
    Route::post('/', [App\Http\Controllers\OngController::class, 'create']);
    Route::get('/{id}', [App\Http\Controllers\OngController::class, 'show']);
    Route::put('/{id}', [App\Http\Controllers\OngController::class, 'edit']);
    Route::delete('/{id}', [App\Http\Controllers\OngController::class, 'delete']);
});

Route::prefix('users')->group(function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
    Route::post('/', [App\Http\Controllers\UserController::class, 'create']);
    Route::get('/{id}', [App\Http\Controllers\UserController::class, 'show']);
    Route::put('/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::delete('/{id}', [App\Http\Controllers\UserController::class, 'delete']);
});

Route::post('auth', [App\Http\Controllers\UserController::class, 'auth']);