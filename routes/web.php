<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Method HTTP:
 * 1. Get = Menampilkan halaman
 * 2. Post = Mengirim data
 * 3. Put = Meng-update data
 * 4. Delete = Menghapus data
 */

// route untuk menampilkan teks
Route::get('/salam/{nama}', function ($nama) {
    return "Assalamualaikum, $nama";
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

//Route untuk menampilkan student
Route::get('admin/student', [StudentController::class, 'index']);

//Route untuk menampilkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

//Route untuk mengirim data student
Route::post ('admin/student/store', [StudentController::class,'store']);
