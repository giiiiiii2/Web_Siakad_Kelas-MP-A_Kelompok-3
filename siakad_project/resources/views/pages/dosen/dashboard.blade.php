@extends('layouts.app')

@section('title', 'Dasbor Dosen')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-sm text-gray-500 mb-1">Beranda / Dasbor</p>
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang, Dr. Budi Santoso</h1>
        <p class="text-gray-500 mt-1">Berikut adalah ringkasan aktivitas akademik Anda.</p>
    </div>
    
    <div class="flex items-center space-x-3 p-2 bg-white rounded-lg shadow-sm border border-gray-100">
        <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
        <div class="text-right">
            <p class="text-sm font-semibold text-gray-800">Dr. Budi Santoso</p>
            <p class="text-xs text-gray-500">Dosen</p>
        </div>
        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <div class="lg:col-span-2 space-y-6">
        
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Jadwal Mengajar Hari Ini</h2>

            <div class="space-y-4 pb-4 border-b border-gray-100">
                <div class="flex items-center space-x-4">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="flex-grow">
                        <p class="font-medium text-gray-800">Kecerdasan Buatan</p>
                        <p class="text-sm text-gray-500">TIK-301 | Ruang 3.04</p>
                    </div>
                    <span class="text-gray-700 font-semibold text-sm flex-shrink-0">08:00 - 10:30</span>
                </div>
                <div class="flex items-center space-x-4">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="flex-grow">
                        <p class="font-medium text-gray-800">Struktur Data & Algoritma</p>
                        <p class="text-sm text-gray-500">TIK-205 | Ruang 2.01</p>
                    </div>
                    <span class="text-gray-700 font-semibold text-sm flex-shrink-0">13:00 - 15:30</span>
                </div>
            </div>

            <div class="text-center py-6 text-gray-500">
                <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h.01M16 11h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p class="text-sm">Tidak ada jadwal mengajar lagi</p>
                <p class="text-xs">Anda tidak memiliki jadwal mengajar lainnya untuk hari ini.</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold text-gray-800">Mata Kuliah Semester Ini</h2>
                <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-800">Lihat Semua</a>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <p class="font-semibold text-gray-800">Pemrograman Berorientasi Objek</p>
                    <p class="text-xs text-gray-500">TIK-202 | 3 SKS</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <p class="font-semibold text-gray-800">Kecerdasan Buatan</p>
                    <p class="text-xs text-gray-500">TIK-301 | 3 SKS</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <p class="font-semibold text-gray-800">Struktur Data & Algoritma</p>
                    <p class="text-xs text-gray-500">TIK-205 | 4 SKS</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <p class="font-semibold text-gray-800">Jaringan Komputer</p>
                    <p class="text-xs text-gray-500">TIK-403 | 3 SKS</p>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:col-span-1">
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 sticky top-20">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Pengumuman & Tugas</h2>
            
            <div class="space-y-4">
                <div class="pb-3 border-b border-gray-100">
                    <div class="flex items-center space-x-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full flex-shrink-0"></span>
                        <a href="#" class="text-sm font-medium text-gray-800 hover:text-blue-600 block">Pengisian Rencana Studi Semester Depan</a>
                    </div>
                    <p class="text-xs text-red-500 ml-4 mt-1">1 hari yang lalu</p>
                </div>
                <div class="pb-3 border-b border-gray-100">
                    <div class="flex items-center space-x-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full flex-shrink-0"></span>
                        <a href="#" class="text-sm font-medium text-gray-800 hover:text-blue-600 block">Batas Akhir Pengumpulan Nilai UAS</a>
                    </div>
                    <p class="text-xs text-red-500 ml-4 mt-1">3 hari yang lalu</p>
                </div>
                <div class="pb-3">
                    <div class="flex items-center space-x-2">
                        <span class="w-2 h-2 bg-gray-400 rounded-full flex-shrink-0"></span>
                        <a href="#" class="text-sm font-medium text-gray-800 hover:text-blue-600 block">Jadwal Ujian Akhir Semester Diterbitkan</a>
                    </div>
                    <p class="text-xs text-gray-500 ml-4 mt-1">1 minggu yang lalu</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 