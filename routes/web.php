<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    //Route untuk menampilkan student
    Route::get('admin/student', [StudentController::class, 'index'])->middleware('admin');

    //Route untuk menampilkan form tambah student
    Route::get('admin/student/create', [StudentController::class, 'create'])->middleware('admin');

    //Route untuk mengirim data student
    Route::post('admin/student/store', [StudentController::class, 'store'])->middleware('admin');

    // Route untuk menampilkan halaman edit student
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

    // Route untuk menyimpan hasil update student
    Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

    // Route untuk menghapus student
    Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

    //Route untuk menampilkan form tambah student
    Route::get('admin/student/create', [StudentController::class, 'create']);

    //Route untuk mengirim data student
    Route::post('admin/student/store', [StudentController::class, 'store']);

    // Route untuk menampilkan halaman edit student
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

    // Route untuk menyimpan hasil update student
    Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

    // Route untuk menghapus student
    Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);
    

    //Route untuk menampilkan form tambah course
    Route::get('admin/course/create', [CourseController::class, 'create']);

    //Route untuk mengirim data course
    Route::post('admin/course/store', [CourseController::class, 'store'])->middleware('admin');

    // Route untuk menampilkan halaman edit course
    Route::get('admin/course/edit/{id}', [CourseController::class, 'edit'])->middleware('admin');

    // Route untuk menyimpan hasil update course
    Route::put('admin/course/update/{id}', [CourseController::class, 'update'])->middleware('admin');

    // Route untuk menghapus course
    Route::delete('admin/course/delete/{id}', [CourseController::class, 'destroy'])->middleware('admin');


    //Route untuk menampilkan course
    Route::get('admin/course', [CourseController::class, 'index']);
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
