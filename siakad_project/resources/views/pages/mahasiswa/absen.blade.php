@extends('layouts.app')

@section('title', 'Riwayat Absensi')

@section('content')

<div class="flex justify-between items-start mb-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-800">Riwayat Absensi</h1>
        <p class="text-gray-500 mt-1">Detail kehadiran untuk setiap mata kuliah</p>
    </div>
    
    <div class="flex space-x-3 items-center">
        <select class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
            <option>Semester Ganjil 2024/25</option>
            <option>Semester Genap 2023/24</option>
        </select>
        <button class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold transition duration-150 shadow-md">
            Cetak Laporan
        </button>
    </div>
</div>

<div class="space-y-4">
    
    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
        
        <div class="p-5 flex justify-between items-center cursor-pointer hover:bg-gray-50 transition duration-150">
            <div class="flex-grow">
                <p class="text-lg font-bold text-gray-800">Dasar Pemrograman</p>
                <p class="text-sm text-gray-500">Dr. Dian Puspita, S.Kom., M.Kom.</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <span class="text-sm font-semibold text-gray-600">Kehadiran</span>
                <div class="flex items-center space-x-1">
                    <span class="text-lg font-bold text-green-600">93%</span>
                    <svg class="w-10 h-10" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2.0845a15.9155 15.9155 0 010 31.831a15.9155 15.9155 0 010-31.831" stroke="#E5E7EB" stroke-width="3" fill="none"/>
                        <path d="M18 2.0845a15.9155 15.9155 0 010 31.831a15.9155 15.9155 0 010-31.831" 
                              stroke="#10B981" stroke-width="3" fill="none" 
                              stroke-dasharray="93, 100" 
                              transform="rotate(-90 18 18)"/>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>

        <div class="p-5 border-t border-gray-100">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm font-medium text-gray-500">
                <span>TANGGAL PERTEMUAN</span>
                <span class="md:col-span-3">STATUS KEHADIRAN</span>
            </div>
            
            <div class="space-y-3 mt-3 divide-y divide-gray-100">
                <div class="grid grid-cols-2 md:grid-cols-4 pt-3 items-center">
                    <span class="text-gray-700">02 September 2025</span>
                    <span class="md:col-span-3">
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded">Hadir</span>
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 pt-3 items-center">
                    <span class="text-gray-700">08 September 2025</span>
                    <span class="md:col-span-3">
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded">Hadir</span>
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 pt-3 items-center">
                    <span class="text-gray-700">16 September 2025</span>
                    <span class="md:col-span-3">
                        <span class="bg-red-100 text-red-700 text-xs font-semibold px-2 py-1 rounded">Absen</span>
                    </span>
                </div>
                </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="p-5 flex justify-between items-center cursor-pointer hover:bg-gray-50 transition duration-150">
            <div class="flex-grow">
                <p class="text-lg font-bold text-gray-800">Kalkulus I</p>
                <p class="text-sm text-gray-500">Prof. Dr. Ir. Ahmad Yani</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <span class="text-sm font-semibold text-gray-600">Kehadiran</span>
                <div class="flex items-center space-x-1">
                    <span class="text-lg font-bold text-red-600">71%</span>
                    <svg class="w-10 h-10" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2.0845a15.9155 15.9155 0 010 31.831a15.9155 15.9155 0 010-31.831" stroke="#E5E7EB" stroke-width="3" fill="none"/>
                        <path d="M18 2.0845a15.9155 15.9155 0 010 31.831a15.9155 15.9155 0 010-31.831" 
                              stroke="#EF4444" stroke-width="3" fill="none" 
                              stroke-dasharray="71, 100" 
                              transform="rotate(-90 18 18)"/>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
        </div>

    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="p-5 flex justify-between items-center cursor-pointer hover:bg-gray-50 transition duration-150">
            <div class="flex-grow">
                <p class="text-lg font-bold text-gray-800">Pendidikan Agama</p>
                <p class="text-sm text-gray-500">Dr. H. Abdullah, M.Ag.</p>
            </div>
            
            <div class="flex items-center space-x-4">
                <span class="text-sm font-semibold text-gray-600">Kehadiran</span>
                <div class="flex items-center space-x-1">
                    <span class="text-lg font-bold text-green-600">100%</span>
                    <svg class="w-10 h-10" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 2.0845a15.9155 15.9155 0 010 31.831a15.9155 15.9155 0 010-31.831" stroke="#E5E7EB" stroke-width="3" fill="none"/>
                        <path d="M18 2.0845a15.9155 15.9155 0 010 31.831a15.9155 15.9155 0 010-31.831" 
                              stroke="#10B981" stroke-width="3" fill="none" 
                              stroke-dasharray="100, 100" 
                              transform="rotate(-90 18 18)"/>
                    </svg>
                </div>
                <svg class="w-5 h-5 text-gray-400 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
        </div>
</div>

@endsection