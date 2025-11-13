@extends('layouts.app')

@section('title', 'Manajemen Jadwal Perkuliahan')

@section('content')

<div class="flex justify-between items-start mb-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Manajemen Jadwal Perkuliahan</h1>
        <p class="text-gray-500">Kelola, buat, edit, dan hapus jadwal perkuliahan untuk semua program studi.</p>
    </div>
    
    <button class="flex items-center space-x-2 px-5 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 font-semibold transition duration-150 shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        <span>Buat Jadwal Baru</span>
    </button>
</div>

<div class="flex justify-between items-center bg-white p-4 rounded-xl shadow-md border border-gray-100 mb-6">
    <div class="flex-grow max-w-2xl relative mr-4">
        <input 
            type="text" 
            placeholder="Cari mata kuliah, dosen..." 
            class="w-full py-3 pl-10 pr-4 border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
        >
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </div>
    
    <div class="flex space-x-3 items-center ml-auto">
        <span class="text-sm font-medium text-gray-600">Tampilan:</span>
        <div class="inline-flex rounded-lg border border-gray-300 shadow-sm bg-white overflow-hidden">
            <button class="px-3 py-2 text-sm font-semibold text-white bg-blue-600 border-r border-blue-700">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <button class="px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            </button>
        </div>
        
        <button class="p-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100 transition duration-150 shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
        </button>
    </div>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">MATA KULIAH</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">DOSEN PENGAMPU</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">KELAS</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">HARI</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/6">WAKTU</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">RUANGAN</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">AKSI</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3 font-medium text-gray-800">Kalkulus I</td>
                <td class="px-4 py-3 whitespace-nowrap">Dr. Budi Santoso</td>
                <td class="px-4 py-3 whitespace-nowrap">A</td>
                <td class="px-4 py-3 whitespace-nowrap">Senin</td>
                <td class="px-4 py-3 whitespace-nowrap">08:00 - 09:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.301</td>
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
                <td class="px-4 py-3 font-medium text-gray-800">Dasar Pemrograman</td>
                <td class="px-4 py-3 whitespace-nowrap">Dr. Citra Lestari</td>
                <td class="px-4 py-3 whitespace-nowrap">B</td>
                <td class="px-4 py-3 whitespace-nowrap">Selasa</td>
                <td class="px-4 py-3 whitespace-nowrap">10:00 - 11:40</td>
                <td class="px-4 py-3 whitespace-nowrap">Lab. Komp 1</td>
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
                <td class="px-4 py-3 font-medium text-gray-800">Fisika Dasar</td>
                <td class="px-4 py-3 whitespace-nowrap">Prof. Eko Prasetyo</td>
                <td class="px-4 py-3 whitespace-nowrap">A</td>
                <td class="px-4 py-3 whitespace-nowrap">Rabu</td>
                <td class="px-4 py-3 whitespace-nowrap">13:00 - 14:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.204</td>
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
                <td class="px-4 py-3 font-medium text-gray-800">Struktur Data</td>
                <td class="px-4 py-3 whitespace-nowrap">Dr. Citra Lestari</td>
                <td class="px-4 py-3 whitespace-nowrap">A</td>
                <td class="px-4 py-3 whitespace-nowrap">Kamis</td>
                <td class="px-4 py-3 whitespace-nowrap">08:00 - 09:40</td>
                <td class="px-4 py-3 whitespace-nowrap">Lab. Komp 2</td>
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
                <td class="px-4 py-3 font-medium text-gray-800">Bahasa Inggris I</td>
                <td class="px-4 py-3 whitespace-nowrap">Dr. Dewi Anjani</td>
                <td class="px-4 py-3 whitespace-nowrap">C</td>
                <td class="px-4 py-3 whitespace-nowrap">Jumat</td>
                <td class="px-4 py-3 whitespace-nowrap">10:00 - 11:40</td>
                <td class="px-4 py-3 whitespace-nowrap">R.405</td>
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

@endsection