<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route buat tes tampilan Halaman Login Siakad
Route::get('/siakad-login', function () {
    return view('pages.auth.login');
});


// Route buat tes tampilan Dashboard Mahasiswa
Route::get('/dashboard-mhs', function () {
    return view('pages.mahasiswa.dashboard');
});

// Route buat tes tampilan Jadwal Kuliah Mahasiswa
Route::get('/jadwal-mhs', function () {
    return view('pages.mahasiswa.jadwal_kuliah');
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
Route::get('/jadwal-dosen', function () {
    return view('pages.dosen.jadwal_mengajar');
});

// Route buat tes tampilan Profil Dosen
Route::get('/profil-dosen', function () {
    return view('pages.dosen.profil');
});

//------------

// Route buat tes tampilan Dashboard Admin
Route::get('/dashboard-admin', function () {
    return view('pages.admin.dashboard');
});

// Route buat tes tampilan Manajemen Mahasiswa Admin
Route::get('/admin-mhs', function () {
    return view('pages.admin.mahasiswa');
});

// Route buat tes tampilan Manajemen Dosen Admin
Route::get('/admin-dosen', function () {
    return view('pages.admin.dosen');
});

// Route buat tes tampilan Manajemen Mata Kuliah Admin
Route::get('/admin-matkul', function () {
    return view('pages.admin.mata_kuliah');
});

// Route buat tes tampilan Manajemen Jadwal Perkuliahan Admin
Route::get('/admin-jadwal', function () {
    return view('pages.admin.jadwal');
});

// Route buat uji tampilan Profil Admin
Route::get('/admin-profil', function () {
    return view('pages.admin.profil');
});