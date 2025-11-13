@extends('layouts.app')

@section('title', 'Kartu Rencana Studi (KRS)')

@section('content')

<div class="flex justify-between items-start mb-4">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Kartu Rencana Studi (KRS)</h1>
        <p class="text-gray-500 mt-1">Pilih mata kuliah yang akan Anda ambil untuk semester ini.</p>
    </div>
    
    <div class="flex space-x-3 items-center">
        <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">
            KRS Disetujui
        </span>
        <button class="px-5 py-2 text-blue-700 bg-blue-100 rounded-lg hover:bg-blue-200 font-semibold transition duration-150 shadow-md">
            Cetak KRS
        </button>
    </div>
</div>

<div class="flex items-center space-x-4 mb-6">
    <span class="text-sm font-medium text-gray-600">Semester: Ganjil | Tahun Ajaran: 2023/2024</span>
    <select class="px-3 py-1 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
        <option>2023/2024</option>
        <option>2022/2023</option>
    </select>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <div class="lg:col-span-2 space-y-4">
        
        <h2 class="text-xl font-semibold text-gray-800">Daftar Mata Kuliah <span class="text-sm font-normal text-gray-500">(krs_detail)</span></h2>

        <div class="flex justify-between items-center bg-white p-4 rounded-xl shadow-lg border border-gray-100">
            <h3 class="text-sm font-medium text-gray-600">Mata kuliah yang terdaftar</h3>
            <button class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-150 shadow-md">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                <span>Tambah Mata Kuliah</span>
            </button>
        </div>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-3/4">NAMA MATA KULIAH (NAMA_MK)</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">SKS</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">Pemrograman Web</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">Basis Data</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">Struktur Data</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">Algoritma & Pemrograman</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">Desain Antarmuka Pengguna</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <button class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>

    <div class="lg:col-span-1">
        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 sticky top-20">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Ringkasan KRS</h2>
            
            <div class="space-y-4">
                <div class="border-b pb-3">
                    <p class="text-sm text-gray-500">Nama Mahasiswa</p>
                    <p class="font-medium text-gray-800">Budi Santoso</p>
                </div>
                <div class="border-b pb-3">
                    <p class="text-sm text-gray-500">Nomor Induk</p>
                    <p class="font-medium text-gray-800">21/480123/SV/12345</p>
                </div>
                <div class="border-b pb-3">
                    <p class="text-sm text-gray-500">Dosen Pembimbing</p>
                    <p class="font-medium text-gray-800">Dr. Retno Wulandari, M.Kom.</p>
                </div>
                
                <div class="pt-2">
                    <p class="text-sm text-gray-500 mb-2">Total SKS Diambil</p>
                    <div class="flex justify-between items-center mb-1">
                        <span class="font-bold text-lg text-gray-800">15 / 24 SKS</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 62.5%"></div> </div>
                </div>

                <button class="w-full mt-4 bg-green-600 text-white font-semibold py-3 rounded-lg hover:bg-green-700 transition duration-200 shadow-md">
                    Ajukan Persetujuan KRS
                </button>
            </div>
        </div>
    </div>
</div>

@endsection