<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('travels', [App\Http\Controllers\Api\V1\TravelController::class, 'index']);
Route::get('travels/{travel:slug}/tours', [App\Http\Controllers\Api\V1\TourController::class, 'index']);


Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::post('travels', [\App\Http\Controllers\Api\V1\Admin\TravelController::class, 'store']);
        Route::post('travels/{travel}/tours', [\App\Http\Controllers\Api\V1\Admin\TourController::class, 'store']);
    });

    Route::put('travels/{travel}', [\App\Http\Controllers\Api\V1\Admin\TravelController::class, 'update']);
});


Route::post('login', App\Http\Controllers\Api\V1\Auth\LoginController::class);
