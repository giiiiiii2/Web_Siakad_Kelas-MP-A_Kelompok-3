<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route buat uji tampilan Halaman Login Siakad
Route::get('/siakad-login-test', function () {
    return view('pages.auth.login');
});

// Route buat uji tampilan Dashboard Mahasiswa
Route::get('/dashboard-mhs', function () {
    return view('pages.dashboard.index');
});

// Route buat uji tampilan Jadwal Kuliah Mahasiswa
Route::get('/jadwal-mhs', function () {
    return view('pages.mahasiswa.jadwal');
});