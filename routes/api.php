<?php

use App\Http\Controllers\Api\Auth\LoginController;
use \App\Http\Controllers\Api\V1\TaaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/api/v1.php';
require __DIR__ . '/api/v2.php';
require __DIR__ . '/api/v3.php';

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::post('/login', LoginController::class);
    Route::post('/logout', \App\Http\Controllers\Api\Auth\LogoutController::class);
    Route::post('/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
});
use App\Http\Controllers\DocController;

Route::prefix('v1')->group(function () {
    Route::apiResource('docs', DocController::class);
});
