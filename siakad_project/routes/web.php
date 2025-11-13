<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route buat uji tampilan Halaman Login Siakad
Route::get('/siakad-login-test', function () {
    return view('pages.auth.login');
});

// Route untuk pengujian tampilan Dashboard Mahasiswa
Route::get('/dashboard-mhs', function () {
    // Menampilkan file Blade Dashboard yang baru kita buat
    return view('pages.dashboard.index');
});

// Route untuk pengujian tampilan Halaman Jadwal Kuliah Mahasiswa
Route::get('/jadwal-mhs', function () {
    // Menampilkan file Blade Jadwal yang baru kita buat
    return view('pages.mahasiswa.jadwal');
});