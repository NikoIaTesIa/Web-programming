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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('products')->group(function(){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'info']);
});

Route::prefix('cart')->group(function(){
    Route::post('/', [\App\Http\Controllers\LibraryController::class, 'addToLibrary']);
});

Route::prefix('user')->group(function(){
    Route::post('/', [\App\Http\Controllers\UserController::class, 'authorization']);
});
