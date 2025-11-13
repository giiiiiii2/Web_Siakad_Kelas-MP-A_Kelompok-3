@extends('layouts.guest')

@section('title', 'Masuk ke Siakad')

@section('content')

<div class="bg-white p-8 md:p-10 rounded-xl shadow-2xl">
    
    <div class="text-left mb-6">
        <h1 class="text-xl font-bold text-blue-700">SIAKAD</h1>
    </div>

    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang</h2>
        <p class="text-sm text-gray-500 mt-1">
            Masuk untuk melanjutkan ke Sistem Informasi Akademik
        </p>
    </div>

    <form method="POST" action="/login">
        @csrf
        
        <div class="mb-6">
            <p class="text-sm font-semibold text-gray-700 mb-2">Masuk sebagai</p>
            <div class="flex space-x-2">
                <button type="button" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md shadow-md">
                    Mahasiswa
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-md">
                    Dosen
                </button>
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-600 bg-gray-200 hover:bg-gray-300 rounded-md">
                    Admin
                </button>
            </div>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">
                Email atau Nomor Induk
            </label>
            <div class="relative">
                <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="Masukkan email atau nomor induk"
                    required
                    autofocus
                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm"
                >
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
            </div>
        </div>

        <div class="mb-6">
            <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">
                Password
            </label>
            <div class="relative">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password Anda"
                    required
                    class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-sm"
                >
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V8a3 3 0 016 0v2"></path></svg>
                </div>
                <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </button>
            </div>
        </div>

        <div class="text-right mb-6">
            <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-800">
                Lupa Password?
            </a>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-200 shadow-md">
            Masuk
        </button>
    </form>
</div>

@endsection