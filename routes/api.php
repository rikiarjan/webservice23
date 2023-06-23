<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\MatakuliahController;
use App\Http\Controllers\API\JurusanController;

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
    Route::post('customer', [CustomerController::class, 'store']);
    Route::patch('customer/{id}', [CustomerController::class, 'update']);
    Route::delete('customer/{id}', [CustomerController::class, 'delete']);

});

Route::group(['prefix'=>'v1'], function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('product/{id}', [ProductController::class, 'show']);
    Route::post('product', [ProductController::class, 'store']);
    Route::put('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('producR', [ProductController::class, 'indexRelasi']);

    
    Route::get('categories', [CategorieController::class, 'index']);
    Route::get('categorie/{id}', [CategorieController::class, 'show']);
    Route::post('categorie', [CategorieController::class, 'store']);
    Route::put('categorie/{id}', [CategorieController::class, 'update']);
    Route::delete('categorie/{id}', [CategorieController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('categoriR', [CategorieController::class, 'indexRelasi']);

});

//TUGAS CRUD dan Relasi tabel MATAKULIAH dengan tabel JURUSAN

Route::group(['prefix'=>'v1'], function () {
    Route::get('matakuliahs', [MatakuliahController::class, 'index']);
    Route::get('matakuliah/{id}', [MatakuliahController::class, 'show']);
    Route::post('matakuliah', [MatakuliahController::class, 'store']);
    Route::put('matakuliah/{id}', [MatakuliahController::class, 'update']);
    Route::delete('matakuliah/{id}', [MatakuliahController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('matakuliahR', [MatakuliahController::class, 'indexRelasi']);
    
    Route::get('jurusans', [JurusanController::class, 'index']);
    Route::get('jurusan/{id}', [JurusanController::class, 'show']);
    Route::post('jurusan', [JurusanController::class, 'store']);
    Route::put('jurusan/{id}', [JurusanController::class, 'update']);
    Route::delete('jurusan/{id}', [JurusanController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('jurusanR', [JurusanController::class, 'indexRelasi']);

});





