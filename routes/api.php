<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\ProductController;

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


Route::group(['prefix' => 'v1'], function () {

    Route::get('customers', [CustomerController::class, 'index']);
    Route::get('customer/{id}', [CustomerController::class, 'show']);


    Route::get('products', [\App\Http\Controllers\API\ProductController::class, 'index']);

    // Route::get('blogs', [BlogController::class, 'index']);
    // Route::get('blog/{id}', [BlogController::class, 'show']);
});



