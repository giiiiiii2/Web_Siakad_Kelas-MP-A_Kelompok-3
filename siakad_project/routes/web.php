<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route buat tes tampilan Halaman Login Siakad
Route::get('/siakad-login-test', function () {
    return view('pages.auth.login');
});


// Route buat tes tampilan Dashboard Mahasiswa
Route::get('/dashboard-mhs', function () {
    return view('pages.mahasiswa.dashboard');
});

// Route buat tes tampilan Jadwal Kuliah Mahasiswa
Route::get('/jadwal-mhs', function () {
    return view('pages.mahasiswa.jadwal');
});

// Route buat tes tampilan KRS Mahasiswa
Route::get('/krs-mhs', function () {
    return view('pages.mahasiswa.krs');
});

// Route buat tes tampilan Riwayat Absensi Mahasiswa
Route::get('/absen-mhs', function () {
    return view('pages.mahasiswa.absen');
});

// Route buat tes tampilan Profil Mahasiswa
Route::get('/profil-mhs', function () {
    return view('pages.mahasiswa.profil');
});

//------------

// Route buat tes tampilan Dashboard Dosen
Route::get('/dashboard-dosen', function () {
    return view('pages.dosen.dashboard');
});

// Route buat tes tampilan Halaman Input Nilai Dosen
Route::get('/input-nilai', function () {
    return view('pages.dosen.input_nilai');
});

// Route buat tes tampilan Jadwal Mengajar Dosen
Route::get('/dosen-jadwal', function () {
    return view('pages.dosen.jadwal_mengajar');
});

// Route buat tes tampilan Profil Dosen
Route::get('/dosen-profil', function () {
    return view('pages.dosen.profil');
});