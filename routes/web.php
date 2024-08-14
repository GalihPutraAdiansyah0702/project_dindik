<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/sekolah', function () {
    return view('sekolah.index');  
});

Route::get('/ptk', function () {
    return view('/ptk.index');
});

Route::get('/peserta_didik', function () {
    return view('peserta_didik.index');
});