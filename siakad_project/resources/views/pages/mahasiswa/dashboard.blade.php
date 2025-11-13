@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa')

@section('content')

<h1 class="text-2xl font-bold text-gray-800 mb-6">Ringkasan Akademik</h1>

<div class="bg-white p-6 rounded-xl shadow-lg flex items-center justify-between mb-6 border border-gray-100">
    <div class="flex items-center space-x-4">
        <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center overflow-hidden border-4 border-blue-200">
            <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
        </div>
        
        <div>
            <p class="text-xl font-bold text-gray-900">Budi Doremi</p>
            <p class="text-sm text-gray-600">F551230111</p>
            <p class="text-sm text-gray-500">Teknik Informatika - Angkatan 2023</p>
        </div>
    </div>

    <div class="flex space-x-3">
        <button class="px-5 py-2 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 font-semibold transition duration-150">
            Lihat Transkrip
        </button>
        <button class="px-5 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 font-semibold transition duration-150">
            Isi KRS
        </button>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm text-gray-500 mb-2 font-medium">IPK</p>
        <p class="text-4xl font-bold text-gray-800">3.87</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm text-gray-500 mb-2 font-medium">Total SKS</p>
        <p class="text-4xl font-bold text-gray-800">120</p>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <p class="text-sm text-gray-500 mb-2 font-medium">SKS Semester Ini</p>
        <p class="text-4xl font-bold text-gray-800">24</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-lg border border-gray-100 overflow-x-auto">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Jadwal Kuliah Aktif</h2>
        
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">KDDE</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mata Kuliah</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKS</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DOSEN</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                <tr><td class="px-4 py-3 whitespace-nowrap">INF901</td><td class="px-4 py-3 whitespace-nowrap">Pemrograman Berorientasi Objek</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Retno Wulandari, S.T., M.T.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">INF902</td><td class="px-4 py-3 whitespace-nowrap">Struktur Data dan Algoritma</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Prof. Dr. Ir. Budi Santoso</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">UMU101</td><td class="px-4 py-3 whitespace-nowrap">Pendidikan Kewarganegaraan</td><td class="px-4 py-3 whitespace-nowrap">2</td><td class="px-4 py-3 whitespace-nowrap">Dr. Siti Aminah, M.Pd.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">INF303</td><td class="px-4 py-3 whitespace-nowrap">Basis Data</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Ahmad Fauzi, S.Kom., M.Kom.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">INF205</td><td class="px-4 py-3 whitespace-nowrap">Jaringan Komputer</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Heru Purnomo, S.T., M.Eng.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">INF305</td><td class="px-4 py-3 whitespace-nowrap">Kecerdasan Buatan</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Citra, S.T., M.T.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">UMU302</td><td class="px-4 py-3 whitespace-nowrap">Pendidikan Agama</td><td class="px-4 py-3 whitespace-nowrap">2</td><td class="px-4 py-3 whitespace-nowrap">Drs. Surya, M.Hum.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">MAT108</td><td class="px-4 py-3 whitespace-nowrap">Kalkulus II</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Indah, M.Si.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">INF401</td><td class="px-4 py-3 whitespace-nowrap">Proyek Perangkat Lunak</td><td class="px-4 py-3 whitespace-nowrap">4</td><td class="px-4 py-3 whitespace-nowrap">Prof. Dr. Ir. Ananda, M.Eng.</td></tr>
                <tr><td class="px-4 py-3 whitespace-nowrap">INF204</td><td class="px-4 py-3 whitespace-nowrap">Sistem Operasi</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Yudi, S.Kom., M.T.</td></tr>
                </tbody>
        </table>
    </div>

    <div class="lg:col-span-1 bg-white p-6 rounded-xl shadow-lg border border-gray-100">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Pengumuman Terbaru</h2>
        
        <div class="space-y-4">
            <div class="pb-3 border-b border-gray-100">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 block">Jadwal Ujian Akhir Semester Ganjil 2024/2025</a>
                <p class="text-xs text-gray-500 mt-1">10 Desember 2025</p>
            </div>
            <div class="pb-3 border-b border-gray-100">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 block">Batas Akhir Pembayaran UKT Semester Genap</a>
                <p class="text-xs text-gray-500 mt-1">12 Desember 2025</p>
            </div>
            <div class="pb-3 border-b border-gray-100">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 block">Pendaftaran Wisuda Periode I Tahun 2024</a>
                <p class="text-xs text-gray-500 mt-1">10 Desember 2019</p>
            </div>
            <div class="pb-3 border-b border-gray-100">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 block">Pengisian KSS Semester Genap 2024/2025</a>
                <p class="text-xs text-gray-500 mt-1">5 Januari 2025</p>
            </div>
             <div class="pb-3 border-b border-gray-100">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 block">Awal Perkuliahan Semester Genap 2025/2026</a>
                <p class="text-xs text-gray-500 mt-1">22 Januari 2025</p>
            </div>
            <div class="pb-3 border-b border-gray-100">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 block">Batas Pengajuan Cuti Akademik Semester Genap 2025/2026</a>
                <p class="text-xs text-gray-500 mt-1">2 Februari 2025</p>
            </div>
        </div>
    </div>
</div>

@endsection