@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

<div class="flex justify-between items-start mb-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang, Admin</h1>
        <p class="text-gray-500 mt-1">Berikut adalah ringkasan aktivitas sistem hari ini.</p>
    </div>
    
    <div class="flex space-x-3 items-center">
        <button class="flex items-center space-x-2 px-5 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 font-semibold transition duration-150 shadow-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            <span>Tambah Pengguna Baru</span>
        </button>
        <button class="flex items-center space-x-2 px-5 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 font-semibold transition duration-150 shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
            <span>Buat Pengumuman</span>
        </button>
    </div>
</div>

<div class="grid grid-cols-5 gap-6 mb-6">
    
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm font-semibold text-gray-500 mb-1">Total Mahasiswa Aktif</p>
        <p class="text-3xl font-bold text-gray-800">1,234</p>
        <p class="text-sm font-semibold text-green-600">+1.5%</p>
    </div>
    
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm font-semibold text-gray-500 mb-1">Total Dosen</p>
        <p class="text-3xl font-bold text-gray-800">152</p>
        <p class="text-sm font-semibold text-green-600">+0.5%</p>
    </div>
    
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm font-semibold text-gray-500 mb-1">Mata Kuliah Semester Ini</p>
        <p class="text-3xl font-bold text-gray-800">88</p>
        <p class="text-sm font-semibold text-green-600">+2.1%</p>
    </div>
    
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm font-semibold text-gray-500 mb-1">Jumlah Program Studi</p>
        <p class="text-3xl font-bold text-gray-800">12</p>
        <p class="text-sm font-semibold text-gray-500">0%</p>
    </div>
    
    <div class="hidden lg:block"></div> 
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <h2 class="text-xl font-semibold text-gray-800">Grafik Pendaftar Baru (6 Bulan Terakhir)</h2>
        <p class="text-sm font-semibold text-green-600 mb-6">540 Total Pendaftar <span class="text-xs ml-1">+12%</span></p>

        <div class="h-64 flex items-end justify-between px-4 pb-2">
            <div class="flex flex-col items-center w-1/6">
                <div class="bg-blue-400 w-1/2 rounded-t-lg" style="height: 40%"></div>
                <span class="text-xs text-gray-500 mt-2">Jan</span>
            </div>
            <div class="flex flex-col items-center w-1/6">
                <div class="bg-blue-500 w-1/2 rounded-t-lg" style="height: 65%"></div>
                <span class="text-xs text-gray-500 mt-2">Feb</span>
            </div>
            <div class="flex flex-col items-center w-1/6">
                <div class="bg-blue-600 w-1/2 rounded-t-lg" style="height: 95%"></div>
                <span class="text-xs text-gray-500 mt-2">Mar</span>
            </div>
            <div class="flex flex-col items-center w-1/6">
                <div class="bg-blue-500 w-1/2 rounded-t-lg" style="height: 50%"></div>
                <span class="text-xs text-gray-500 mt-2">Apr</span>
            </div>
            <div class="flex flex-col items-center w-1/6">
                <div class="bg-blue-400 w-1/2 rounded-t-lg" style="height: 78%"></div>
                <span class="text-xs text-gray-500 mt-2">Mei</span>
            </div>
            <div class="flex flex-col items-center w-1/6">
                <div class="bg-blue-600 w-1/2 rounded-t-lg" style="height: 85%"></div>
                <span class="text-xs text-gray-500 mt-2">Jun</span>
            </div>
        </div>
    </div>

    <div class="lg:col-span-1">
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 sticky top-20">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Tugas & Notifikasi</h2>
            
            <div class="space-y-4">
                <div class="pb-3 border-b border-gray-100">
                    <p class="text-base font-semibold text-blue-600 mb-1">15 Persetujuan KRS Tertunda</p>
                    <p class="text-xs text-gray-500">Harap tinjau dan setujui KRS mahasiswa.</p>
                </div>
                <div class="pb-3 border-b border-gray-100">
                    <p class="text-base font-semibold text-blue-600 mb-1">8 Verifikasi Pembayaran</p>
                    <p class="text-xs text-gray-500">Mahasiswa menunggu konfirmasi pembayaran.</p>
                </div>
                <div class="pb-3">
                    <p class="text-base font-semibold text-gray-800 mb-1">Laporan Sistem Siap Ditinjau</p>
                    <p class="text-xs text-gray-500">Laporan bulanan sudah dibuat otomatis.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 mt-6 overflow-x-auto">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Terbaru</h2>
    
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/5">PENGGUNA</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-3/5">AKTIVITAS</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/5">WAKTU</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">Dr. Budi Santoso</td>
                <td class="px-4 py-3 text-gray-700">Menambah materi baru untuk mata kuliah "Dasar Pemrograman".</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-500">5 menit yang lalu</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">Ani Lestari <span class="text-xs text-gray-500">(Mahasiswa)</span></td>
                <td class="px-4 py-3 text-gray-700">Menyelesaikan pendaftaran ulang untuk semester ganjil.</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-500">1 jam yang lalu</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">Admin Sistem</td>
                <td class="px-4 py-3 text-gray-700">Membuat pengumuman tentang jadwal ujian akhir.</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-500">3 jam yang lalu</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">Candra Wijaya <span class="text-xs text-gray-500">(Mahasiswa)</span></td>
                <td class="px-4 py-3 text-gray-700">Mengajukan permohonan KRS untuk disetujui.</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-500">Kemarin</td>
            </tr>
            </tbody>
    </table>
</div>

@endsection