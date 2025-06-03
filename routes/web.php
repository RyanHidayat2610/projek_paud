<?php
// routes/web.php
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    if (!session()->has('id_admin')) {
        return redirect('/login');
    }
    return view('admin.home');;
});



Route::post('/admin/tentang/update', [AdminController::class, 'updateTentang'])->name('admin.tentang.update');


use App\Http\Controllers\Admin\AdminController;

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
Route::post('/admin/kegiatan/store', [AdminController::class, 'store'])->name('admin.kegiatan.store');
Route::get('/admin/kegiatan/edit/{id}', [AdminController::class, 'editKegiatan'])->name('admin.kegiatan.edit');
Route::put('/admin/kegiatan/update/{id}', [AdminController::class, 'updateKegiatan'])->name('admin.kegiatan.update');
