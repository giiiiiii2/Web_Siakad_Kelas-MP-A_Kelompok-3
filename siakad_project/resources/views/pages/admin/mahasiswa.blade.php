@extends('layouts.app')

@section('title', 'Manajemen Data Mahasiswa')

@section('content')

<h1 class="text-3xl font-bold text-gray-800 mb-6">Manajemen Data Mahasiswa</h1>

<div class="flex justify-between items-center bg-white p-4 rounded-xl shadow-md border border-gray-100 mb-6">
    <div class="flex-grow max-w-2xl relative">
        <input 
            type="text" 
            placeholder="Cari berdasarkan Nama atau NIM..." 
            class="w-full py-3 pl-10 pr-4 border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
        >
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </div>
    
    <button class="flex items-center space-x-2 px-5 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 font-semibold transition duration-150 shadow-md ml-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        <span>Tambah Mahasiswa</span>
    </button>
</div>

<div class="flex space-x-4 items-center mb-6">
    <div class="relative">
        <select class="appearance-none px-4 py-2 border border-gray-300 rounded-lg text-sm bg-white pr-8 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option disabled selected>Status: Aktif</option>
            <option>Aktif</option>
            <option>Lulus</option>
            <option>Cuti</option>
        </select>
        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-500 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </div>
    
    <div class="relative">
        <select class="appearance-none px-4 py-2 border border-gray-300 rounded-lg text-sm bg-white pr-8 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option disabled selected>Angkatan: 2023</option>
            <option>2023</option>
            <option>2022</option>
            <option>2021</option>
        </select>
        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-500 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </div>

    <div class="relative">
        <select class="appearance-none px-4 py-2 border border-gray-300 rounded-lg text-sm bg-white pr-8 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <option disabled selected>Program Studi</option>
            <option>Teknik Informatika</option>
            <option>Sistem Informasi</option>
            <option>Manajemen</option>
        </select>
        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-500 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">NIM</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">NAMA MAHASISWA</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">PROGRAM STUDI</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">ANGKATAN</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">STATUS</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">AKSI</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">2103010001</td>
                <td class="px-4 py-3 whitespace-nowrap">Budi Santoso</td>
                <td class="px-4 py-3 whitespace-nowrap">Teknik Informatika</td>
                <td class="px-4 py-3 whitespace-nowrap">2021</td>
                <td class="px-4 py-3 whitespace-nowrap">
                    <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">Aktif</span>
                </td>
                <td class="px-4 py-3 text-center whitespace-nowrap space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">2203010015</td>
                <td class="px-4 py-3 whitespace-nowrap">Citra Lestari</td>
                <td class="px-4 py-3 whitespace-nowrap">Sistem Informasi</td>
                <td class="px-4 py-3 whitespace-nowrap">2022</td>
                <td class="px-4 py-3 whitespace-nowrap">
                    <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">Aktif</span>
                </td>
                <td class="px-4 py-3 text-center whitespace-nowrap space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">2003010020</td>
                <td class="px-4 py-3 whitespace-nowrap">Dewi Anggraini</td>
                <td class="px-4 py-3 whitespace-nowrap">Manajemen</td>
                <td class="px-4 py-3 whitespace-nowrap">2020</td>
                <td class="px-4 py-3 whitespace-nowrap">
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-full">Lulus</span>
                </td>
                <td class="px-4 py-3 text-center whitespace-nowrap space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </td>
            </tr>
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">2303010005</td>
                <td class="px-4 py-3 whitespace-nowrap">Eka Putra</td>
                <td class="px-4 py-3 whitespace-nowrap">Teknik Informatika</td>
                <td class="px-4 py-3 whitespace-nowrap">2023</td>
                <td class="px-4 py-3 whitespace-nowrap">
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-2 py-1 rounded-full">Cuti</span>
                </td>
                <td class="px-4 py-3 text-center whitespace-nowrap space-x-2">
                    <button class="text-blue-500 hover:text-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </td>
            </tr>
            </tbody>
    </table>
</div>

<div class="flex justify-between items-center mt-4">
    <p class="text-sm text-gray-600">Showing 1-4 of 100</p>
    
    <div class="flex space-x-1 items-center">
        <button class="p-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-100">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button class="px-4 py-2 border border-blue-500 rounded-lg text-white bg-blue-600 font-semibold">1</button>
        <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">2</button>
        <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100">3</button>
        <button class="p-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-100">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>
</div>

@endsection