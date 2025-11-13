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
    return view('pages.mahasiswa.dashboard');
});

// Route buat uji tampilan Jadwal Kuliah Mahasiswa
Route::get('/jadwal-mhs', function () {
    return view('pages.mahasiswa.jadwal');
});

// Route buat uji tampilan KRS Mahasiswa
Route::get('/krs-mhs', function () {
    return view('pages.mahasiswa.krs');
});

// Route buat uji tampilan Riwayat Absensi Mahasiswa
Route::get('/absen-mhs', function () {
    return view('pages.mahasiswa.absen');
});

// Route buat uji tampilan Profil Mahasiswa
Route::get('/profil-mhs', function () {
    return view('pages.mahasiswa.profil');
});

//------------

// Route untuk pengujian tampilan Dashboard Dosen
Route::get('/dashboard-dosen', function () {
    return view('pages.dosen.dashboard');
});