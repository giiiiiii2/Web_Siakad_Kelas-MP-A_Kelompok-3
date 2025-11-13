<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route buat uji tampilan Halaman Login Siakad
Route::get('/siakad-login-test', function () {
    return view('pages.auth.login');
});
