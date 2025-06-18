<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirAnakController;
use App\Http\Controllers\ArtikelUserController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminAuthController;





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

// Route::get('/data-anak', [FormulirAnakController::class, 'DataAnak']);

Route::get('/admin/pendaftar', [FormulirAnakController::class, 'DataAnak']);

Route::patch('/anak/{id}/status', [FormulirAnakController::class, 'updateStatus'])->name('anak.updateStatus');





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





// Admin Authentication Routes

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/use App\Http\Controllers\adminController;/dashboard', function () {
    return 'Dashboard Admin';
})->middleware('auth');

Route::get('/beranda-user', function () {
    return 'Beranda User';
})->middleware('auth');

Route::get('/reset-password', [AuthController::class, 'showResetForm'])->name('password.request');
Route::post('/reset-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showNewPasswordForm'])->name('password.reset');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm']);
Route::post('/reset-password/{token}', [AuthController::class, 'resetPassword']);
Route::get('/new-password/{token}', [AuthController::class, 'showNewPasswordForm'])->name('new.password.form');
Route::post('/new-password/{token}', [AuthController::class, 'submitNewPassword'])->name('new.password.submit');
Route::get('/reset', [AuthController::class, 'showResetForm'])->name('reset.form');
Route::post('/reset-password', [AuthController::class, 'sendResetLink'])->name('send.reset.link');
Route::get('/new-password/{token}', [AuthController::class, 'showNewPasswordForm'])->name('password.reset.form');
Route::post('/new-password/{token}', [AuthController::class, 'updatePassword'])->name('password.update');
Route::post('/new-password/{token}', [AuthController::class, 'updatePassword'])->name('new.password.submit');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/Home', function () {
    return view('Home');
})->name('Home');


Route::get('/admin/dashboard', function () {
    return view('/admin/home');
})->middleware('auth');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    session()->flush(); // Hapus semua session
    return redirect('/login');
});
Route::get('/reset-session', function () {
    session()->flush(); // Hapus semua session login
    return redirect('/login');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/formulir', function () {
    if (!session()->has('user_id') || session('role') !== 'user') {
        // simpan informasi bahwa user ingin ke formulir
        session(['redirect_to_formulir' => true]);
        return redirect()->route('register.form')->with('warning', 'Silakan buat akun terlebih dahulu sebelum mengisi formulir.');
    }

    return view('formulir'); // sesuaikan dengan file formulirmu
});
