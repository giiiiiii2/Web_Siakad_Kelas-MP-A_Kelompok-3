@extends('layouts.app')

@section('title', 'Profil Admin')

@section('content')

<h1 class="text-3xl font-bold text-gray-800 mb-2">Profil Admin</h1>
<p class="text-gray-500 mb-6">Lihat dan perbarui informasi profil Anda.</p>

<div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
    
    <h2 class="text-xl font-bold text-gray-800 mb-6 border-b pb-2">Informasi Pribadi</h2>
    
    <form action="#" method="POST">
        @csrf {{-- Jangan lupa token CSRF untuk form Laravel --}}

        <div class="space-y-4 mb-10 max-w-2xl">
            <div>
                <label for="nama_lengkap" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                <input
                    type="text"
                    id="nama_lengkap"
                    name="nama_lengkap"
                    value="Budi Susanto"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>
            
            <div>
                <label for="id_karyawan" class="block text-sm font-semibold text-gray-700 mb-1">ID Karyawan / Operator</label>
                <input
                    type="text"
                    id="id_karyawan"
                    name="id_karyawan"
                    value="OPR-012345"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>
            
            <div>
                <label for="email_admin" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                <input
                    type="email"
                    id="email_admin"
                    name="email_admin"
                    value="operator@kampus.ac.id"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>
        </div>
        
        <h2 class="text-xl font-bold text-gray-800 mb-6 border-b pb-2">Ubah Password</h2>
        
        <div class="space-y-4 max-w-2xl">
            
            <div>
                <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-1">Password Saat Ini</label>
                <input
                    type="password"
                    id="current_password"
                    name="current_password"
                    placeholder="********"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>

            <div>
                <label for="new_password" class="block text-sm font-semibold text-gray-700 mb-1">Password Baru</label>
                <input
                    type="password"
                    id="new_password"
                    name="new_password"
                    placeholder="********"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>

            <div>
                <label for="confirm_password" class="block text-sm font-semibold text-gray-700 mb-1">Konfirmasi Password Baru</label>
                <input
                    type="password"
                    id="confirm_password"
                    name="confirm_password"
                    placeholder="********"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm bg-white"
                >
            </div>
        </div>
        
        <div class="flex justify-end w-full pt-6">
             <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200 shadow-md">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

@endsection