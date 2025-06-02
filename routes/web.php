<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/artikel', function () {
    return view('artikel');
});

use App\Http\Controllers\AdminController;

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

use App\Http\Controllers\KontenController;

Route::middleware(['auth.admin'])->group(function () {
    Route::resource('konten', KontenController::class);
});
