<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookStoreController;
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

Route::get('/books', [BookStoreController::class, 'index']);
Route::get('/books/{id}', [BookStoreController::class, 'show']);

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('signup', [AuthController::class, 'signup']);
    
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);

        Route::post('books', [BookStoreController::class, 'store']);
        Route::put('books/{id}', [BookStoreController::class, 'update']);
        Route::delete('books/{id}', [BookStoreController::class, 'destroy']);
    });
});

Route::get('unauthorized', [AuthController::class, 'unauthorized']);