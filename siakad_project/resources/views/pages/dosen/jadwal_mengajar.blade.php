@extends('layouts.app')

@section('title', 'Jadwal Mengajar')

@section('content')

<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Jadwal Mengajar Saya</h1>
</div>

<div class="flex justify-between items-center mb-6">
    
    <div class="inline-flex rounded-lg border border-gray-300 shadow-sm bg-white">
        <button class="px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-100 rounded-l-lg border-r border-gray-300">
            Tampilan Tabel
        </button>
        <button class="px-4 py-2 text-sm font-medium text-gray-600 rounded-r-lg hover:bg-gray-50">
            Tampilan Kalender
        </button>
    </div>

    <div class="flex space-x-3 items-center">
        <select class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500 shadow-sm">
            <option>Ganjil 2023/2024</option>
            <option>Genap 2022/2023</option>
        </select>
        
        <button class="px-5 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 font-semibold transition duration-150 shadow-sm">
            Cetak
        </button>
        
        <button class="flex items-center space-x-2 px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-150 shadow-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            <span>Ekspor</span>
        </button>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">HARI</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">JAM</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">RUANG</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/2">MATA KULIAH</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">SEMESTER</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold text-gray-800">Senin</td>
                <td class="px-4 py-3 whitespace-nowrap">08:00 - 09:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.401</td>
                <td class="px-4 py-3 font-medium text-gray-800">Pemrograman Berorientasi Objek</td>
                <td class="px-4 py-3 whitespace-nowrap">3</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold text-gray-800">Selasa</td>
                <td class="px-4 py-3 whitespace-nowrap">10:00 - 11:40</td>
                <td class="px-4 py-3 whitespace-nowrap">Lab Komputer 2</td>
                <td class="px-4 py-3 font-medium text-gray-800">Basis Data Lanjut</td>
                <td class="px-4 py-3 whitespace-nowrap">5</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold text-gray-800">Rabu</td>
                <td class="px-4 py-3 whitespace-nowrap">13:00 - 14:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.305</td>
                <td class="px-4 py-3 font-medium text-gray-800">Struktur Data dan Algoritma</td>
                <td class="px-4 py-3 whitespace-nowrap">3</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold text-gray-800">Kamis</td>
                <td class="px-4 py-3 whitespace-nowrap">08:00 - 09:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.401</td>
                <td class="px-4 py-3 font-medium text-gray-800">Pemrograman Berorientasi Objek</td>
                <td class="px-4 py-3 whitespace-nowrap">3</td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-semibold text-gray-800">Jumat</td>
                <td class="px-4 py-3 whitespace-nowrap">10:00 - 11:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.212</td>
                <td class="px-4 py-3 font-medium text-gray-800">Kecerdasan Buatan</td>
                <td class="px-4 py-3 whitespace-nowrap">5</td>
            </tr>
            </tbody>
    </table>
</div>

@endsection