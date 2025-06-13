<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirAnakController;



Route::get('/login', function () {
    return view('login1', ['title' => 'Login']);
});

Route::get('/daftar', function () {
    return view('daftar1', ['title' => 'Daftar']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/fasilitas', function () {
    return view('fasilitas', ['title' => 'Fasilitas']);
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran', ['title' => 'Pendaftaran']);
});

Route::get('/formulir', function () {
    return view('formulir', ['title' => 'Formulir']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

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

Route::get('/data-anak', [FormulirAnakController::class, 'DataAnak']);

Route::patch('/anak/{id}/status', [FormulirAnakController::class, 'updateStatus'])->name('anak.updateStatus');

use App\Http\Controllers\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/reset-password', [AdminAuthController::class, 'showResetForm'])->name('admin.reset');
Route::post('/admin/reset-password', [AdminAuthController::class, 'sendResetLink']);
Route::get('/admin/reset-password/{token}', [AdminAuthController::class, 'showNewPasswordForm'])->name('admin.reset.form');
Route::post('/admin/reset-password/{token}', [AdminAuthController::class, 'updatePassword']);
