@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')

<h1 class="text-3xl font-bold text-gray-800 mb-2">Profil Mahasiswa</h1>
<p class="text-sm text-gray-500 mb-6">Dashboard / Profil Saya</p>

<div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
    
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        
        <div class="lg:col-span-1 flex flex-col items-center border-r border-gray-100 pr-8">
            
            <div class="w-28 h-28 rounded-full bg-blue-100 flex items-center justify-center overflow-hidden border-4 border-blue-200 mb-4">
                <svg class="w-20 h-20 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
            </div>
            
            <p class="text-lg font-bold text-gray-800">Budi Doremi</p>
            <p class="text-sm text-gray-500 mb-6">F551230111</p>
            
            <button class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 font-semibold transition duration-150 shadow-sm w-full">
                Ubah Foto
            </button>
        </div>

        <div class="lg:col-span-3">
            <h2 class="text-xl font-semibold text-gray-800 mb-6">Informasi Pribadi</h2>
            
            <form action="#" method="POST" class="space-y-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nama" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            value="Budi Doremi"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-gray-50"
                        >
                    </div>
                    <div>
                        <label for="nim" class="block text-sm font-semibold text-gray-700 mb-1">NIM</label>
                        <input
                            type="text"
                            id="nim"
                            name="nim"
                            value="F551230111"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-gray-50"
                        >
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="budidoremi6@gmail.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                    >
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Domisili</label>
                    <textarea
                        id="alamat"
                        name="alamat"
                        rows="3"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                    >Jl. Unsrat 1</textarea>
                </div>
                
                <div class="flex justify-end items-center space-x-4 pt-4">
                    <button type="button" class="text-sm font-semibold text-gray-600 hover:text-gray-800 transition duration-150">
                        Ubah Password
                    </button>
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200 shadow-md">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection