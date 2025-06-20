<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirAnakController;
use App\Http\Controllers\ArtikelUserController;
use App\Http\Controllers\GuruController;

use App\Http\Controllers\AdminKegiatanAboutController;

use App\Http\Controllers\AdminFasilitasController;
use App\Http\Controllers\FasilitasController;

use App\Http\Controllers\AdminSliderController;


use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\AdminKegiatanController;
use App\Http\Controllers\HomeController;

Route::get('/login', [AuthController::class, 'showLogin']);

Route::get('/daftar', function () {
    return view('daftar1', ['title' => 'Daftar']);
});


Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');


Route::get('/pendaftaran', function () {
    return view('pendaftaran', ['title' => 'Pendaftaran']);
});

Route::get('/formulir', [FormulirAnakController::class, 'create']);



Route::get('/artikel', function () {
    return view('artikel', ['title' => 'Artikel']);
});

Route::get('/check-kk', function () {
    return view('artikel');
});

Route::get('/list-peserta', function () {
    return view('peserta');
});



Route::get('/formulir-anak', [FormulirAnakController::class, 'create']);

Route::post('/formulir-anak', [FormulirAnakController::class, 'store']);

// Route::get('/data-anak', [FormulirAnakController::class, 'DataAnak']);

Route::get('/admin/pendaftar', [FormulirAnakController::class, 'DataAnak']);

Route::patch('/anak/{id}/status', [FormulirAnakController::class, 'updateStatus'])->name('anak.updateStatus');

Route::delete('/admin/anak/delete/{id}', [FormulirAnakController::class, 'destroy'])->name('anak.destroy');




Route::get('/admin/home', function () {
    return view('admin.admin-home', ['title' => 'Halaman Admin']);
});

Route::get('/admin/about', function () {
    return view('admin.admin-about', ['title' => 'Admin About']);
});

Route::get('/admin/artikel', function () {
    return view('admin.admin-artikel', ['title' => 'Admin Artikel']);
});



//Artikel Routes
// Admin
Route::prefix('admin')->group(function () {
    Route::resource('/artikel', App\Http\Controllers\Admin\ArtikelController::class);
});

// User

Route::get('/artikel', [ArtikelUserController::class, 'index']);


// Guru Routes

// Admin - Guru
Route::prefix('admin/guru')->name('guru.')->group(function () {
    Route::get('/', [GuruController::class, 'index'])->name('index');
    Route::post('/', [GuruController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [GuruController::class, 'edit'])->name('edit');
    Route::put('/{id}', [GuruController::class, 'update'])->name('update');
    Route::delete('/{id}', [GuruController::class, 'destroy'])->name('destroy');
});

// User
Route::get('/about', [GuruController::class, 'showToUser'])->name('about');


// User Login and Registration
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);

Route::get('/logout', [AuthController::class, 'logout']);


// Admin KegiatanAbout About

Route::get('/admin/kegiatan-about', [AdminKegiatanAboutController::class, 'index'])->name('kegiatan-about.index');
Route::post('/admin/kegiatan-about', [AdminKegiatanAboutController::class, 'store'])->name('kegiatan-about.store');
Route::post('/admin/kegiatan-about/{id}/update', [AdminKegiatanAboutController::class, 'update'])->name('kegiatan-about.update');
Route::delete('/admin/kegiatan-about/{id}', [AdminKegiatanAboutController::class, 'destroy'])->name('kegiatan-about.destroy');

// Admin Fasilitas
Route::get('/admin/fasilitas', [AdminFasilitasController::class, 'index'])->name('admin.fasilitas.index');
Route::post('/admin/fasilitas', [AdminFasilitasController::class, 'store'])->name('admin.fasilitas.store');
Route::get('/admin/fasilitas/{id}/edit', [AdminFasilitasController::class, 'edit'])->name('admin.fasilitas.edit');
Route::put('/admin/fasilitas/{id}', [AdminFasilitasController::class, 'update'])->name('admin.fasilitas.update');
Route::delete('/admin/fasilitas/{id}', [AdminFasilitasController::class, 'destroy'])->name('admin.fasilitas.destroy');

// Admin Slider
Route::get('admin/slider', [AdminSliderController::class, 'index'])->name('admin.slider.index');
Route::post('admin/slider', [AdminSliderController::class, 'store'])->name('admin.slider.store');
Route::put('admin/slider/{id}', [AdminSliderController::class, 'update'])->name('admin.slider.update');
Route::delete('admin/slider/{id}', [AdminSliderController::class, 'destroy'])->name('admin.slider.destroy');




// Admin Home
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');

// Program CRUD
Route::post('/admin/program/store', [AdminHomeController::class, 'storeProgram'])->name('program.store');
Route::delete('/admin/program/delete/{id}', [AdminHomeController::class, 'deleteProgram'])->name('program.delete');
Route::get('/admin/program/edit/{id}', [AdminProgramController::class, 'edit'])->name('program.edit');
Route::put('/admin/program/update/{id}', [AdminProgramController::class, 'update'])->name('program.update');
Route::get('/admin/program/cancel', [AdminProgramController::class, 'cancel'])->name('program.cancel');

// Kegiatan CRUD
Route::post('/admin/kegiatan/store', [AdminHomeController::class, 'storeKegiatan'])->name('kegiatan.store');
Route::delete('/admin/kegiatan/delete/{id}', [AdminHomeController::class, 'deleteKegiatan'])->name('kegiatan.delete');
Route::get('/admin/kegiatan/edit/{id}', [AdminKegiatanController::class, 'edit'])->name('kegiatan.edit');
Route::put('/admin/kegiatan/update/{id}', [AdminKegiatanController::class, 'update'])->name('kegiatan.update');
Route::get('/admin/kegiatan/cancel', [AdminKegiatanController::class, 'cancel'])->name('kegiatan.cancel');

// User Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
