@extends('layouts.app')

@section('title', 'Jadwal Kuliah')

@section('content')

<div class="flex justify-between items-start mb-4">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Jadwal Kuliah</h1>
        <p class="text-gray-500 mt-1">Semester Ganjil 2024/2025</p>
    </div>
    
    <button class="px-5 py-2 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 font-semibold transition duration-150 shadow-md">
        Cetak Jadwal
    </button>
</div>

<div class="flex justify-end items-center space-x-3 mb-6">
    <button class="p-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100 transition duration-150 shadow-sm">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707v5.586l-4-4v-5.586a1 1 0 00-.293-.707L3.293 6.707A1 1 0 013 6.586V4z"></path></svg>
    </button>
    
    <button class="p-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100 transition duration-150 shadow-sm">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
    </button>

    <button class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-150 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h.01M16 11h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span>Ekspor ke Kalender</span>
    </button>
</div>

<div class="mb-4">
    <div class="flex border-b border-gray-200">
        <button class="px-4 py-2 text-sm font-semibold border-b-2 border-blue-600 text-blue-600">
            Tabel
        </button>
        <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-gray-300 transition duration-150">
            Kalender
        </button>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-12">#</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">KODE</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MATA KULIAH</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">SKS</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DOSEN</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            <tr><td class="px-4 py-3 text-center text-gray-700">1</td><td class="px-4 py-3 whitespace-nowrap">INF301</td><td class="px-4 py-3 whitespace-nowrap">Pemrograman Berorientasi Objek</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Retno Wulandari, S.T., M.T.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">2</td><td class="px-4 py-3 whitespace-nowrap">INF302</td><td class="px-4 py-3 whitespace-nowrap">Struktur Data dan Algoritma</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Prof. Dr. Ir. Budi Santoso</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">3</td><td class="px-4 py-3 whitespace-nowrap">UMB101</td><td class="px-4 py-3 whitespace-nowrap">Pendidikan Kewarganegaraan</td><td class="px-4 py-3 whitespace-nowrap">2</td><td class="px-4 py-3 whitespace-nowrap">Dr. Siti Aminah, M.Pd.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">4</td><td class="px-4 py-3 whitespace-nowrap">INF203</td><td class="px-4 py-3 whitespace-nowrap">Basis Data</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Ahmad Fauzi, S.Kom., M.Kom.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">5</td><td class="px-4 py-3 whitespace-nowrap">INF205</td><td class="px-4 py-3 whitespace-nowrap">Jaringan Komputer</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Heru Purnomo, S.T., M.Eng.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">6</td><td class="px-4 py-3 whitespace-nowrap">INF303</td><td class="px-4 py-3 whitespace-nowrap">Kecerdasan Buatan</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Citra, S.T., M.T.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">7</td><td class="px-4 py-3 whitespace-nowrap">UMB102</td><td class="px-4 py-3 whitespace-nowrap">Pendidikan Agama</td><td class="px-4 py-3 whitespace-nowrap">2</td><td class="px-4 py-3 whitespace-nowrap">Drs. Surya, M.Hum.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">8</td><td class="px-4 py-3 whitespace-nowrap">MAT101</td><td class="px-4 py-3 whitespace-nowrap">Kalkulus I</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Indah, M.Si.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">9</td><td class="px-4 py-3 whitespace-nowrap">INF401</td><td class="px-4 py-3 whitespace-nowrap">Proyek Perangkat Lunak</td><td class="px-4 py-3 whitespace-nowrap">4</td><td class="px-4 py-3 whitespace-nowrap">Prof. Dr. Ir. Ananda, M.Eng.</td></tr>
            <tr><td class="px-4 py-3 text-center text-gray-700">10</td><td class="px-4 py-3 whitespace-nowrap">INF204</td><td class="px-4 py-3 whitespace-nowrap">Sistem Operasi</td><td class="px-4 py-3 whitespace-nowrap">3</td><td class="px-4 py-3 whitespace-nowrap">Dr. Yudi, S.Kom., M.T.</td></tr>
            </tbody>
    </table>
</div>

@endsection