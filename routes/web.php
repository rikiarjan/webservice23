<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Biaya236Controller;

Route::get('', function () {
    return view('index');
});

Route::prefix('/mahasiswa')->group(function () {

    Route::get('/nama/{nama}', function ($nama) {
        return "Nama Mahasiswa :  $nama";
    });

    Route::get('/umur/{umur}', function ($umur) {
        return "Umur Mahasiswa :  $umur";
    });

    Route::get('/alamat/{alamat}', function ($alamat) {
        return "alamat Mahasiswa :  $alamat";
    });

});

// route ke view
Route::get('/view-app', function () {
    return view('app');
});

// route ke controller
Route::get('test/{kode}', [TestController::class, 'index']);

// route untuk course
Route::get('course', [CourseController::class, 'index'])->name('course.index');

Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');

Route::get('institution', [InstitutionController::class, 'index'])->name('institution.index');

// route untuk portofolio2
// Route::get('/portofolio', [PortofolioController::class, 'portofolio']);
// Route::get('/portofolio', function () {
//     return view('portofolio');
// });

Route::get('portofolio/{ubg}', [PortofolioController::class, 'index']);


//route untuk blog
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::delete('blog/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
Route::get('blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
Route::patch('blog/update{blog}', [BlogController::class, 'update'])->name('blog.update');

//route untuk biaya
Route::get('biaya', [Biaya236Controller::class, 'index'])->name('biaya.index');
Route::get('biaya/create', [Biaya236Controller::class, 'create'])->name('biaya.create');
Route::post('biaya/store', [Biaya236Controller::class, 'store'])->name('biaya.store');
Route::delete('biaya/{id}', [Biaya236Controller::class, 'destroy'])->name('biaya.delete');
Route::get('biaya/edit/{biaya}', [Biaya236Controller::class, 'edit'])->name('biaya.edit');
Route::patch('biaya/update{biaya}', [Biaya236Controller::class, 'update'])->name('biaya.update');


