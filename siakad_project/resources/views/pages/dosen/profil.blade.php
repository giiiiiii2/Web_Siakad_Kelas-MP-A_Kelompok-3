@extends('layouts.app')

@section('title', 'Profil Dosen')

@section('content')

<h1 class="text-3xl font-bold text-gray-800 mb-10">Profil Dosen</h1>

<div class="bg-white p-10 rounded-xl shadow-lg border border-gray-100 max-w-4xl mx-auto">
    
    <div class="flex items-start space-x-8 pb-10 border-b border-gray-100 mb-8">
        
        <div class="flex-shrink-0 w-28 h-28 rounded-full bg-gray-200 overflow-hidden">
            <img src="https://via.placeholder.com/150/0000FF/FFFFFF?text=Dr+Budi" alt="Foto Dosen" class="w-full h-full object-cover">
        </div>
        
        <div class="pt-2">
            <h2 class="text-2xl font-bold text-gray-800 mb-1">Dr. Budi Santoso, M.Kom.</h2>
            <p class="text-sm text-gray-500 mb-3">NIDN: 0012345678</p>
            
            <div class="flex flex-col space-y-1 text-sm text-gray-700">
                <p class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.593 23.593 0 0112 15c-3.183 0-6.195-.45-9-1.745M19 15v2m-2-2v2m-2-2v2m-2-2v2m-2-2v2m-2-2v2m-2-2v2m-2-2v2M8 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM16 11.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path></svg>
                    <span>Dosen Teknik Informatika</span>
                </p>
                <p class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.848 5.232a2 2 0 002.304 0L21 8m-2-3H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2z"></path></svg>
                    <span>budi.s@universitas.ac.id</span>
                </p>
            </div>
        </div>
    </div>

    <h2 class="text-xl font-bold text-gray-800 mb-6">Ubah Password</h2>
    
    <form action="#" method="POST" class="space-y-6 max-w-3xl">
        
        <div>
            <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-2">Password Saat Ini</label>
            <input
                type="password"
                id="current_password"
                name="current_password"
                placeholder="Masukkan password Anda saat ini"
                class="w-full md:w-3/5 px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
            >
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="new_password" class="block text-sm font-semibold text-gray-700 mb-2">Password Baru</label>
                <input
                    type="password"
                    id="new_password"
                    name="new_password"
                    placeholder="Masukkan password baru"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>
            <div>
                <label for="confirm_password" class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password Baru</label>
                <input
                    type="password"
                    id="confirm_password"
                    name="confirm_password"
                    placeholder="Konfirmasi password baru"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>
        </div>
        
        <div class="pt-4">
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200 shadow-md">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

@endsection