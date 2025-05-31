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
