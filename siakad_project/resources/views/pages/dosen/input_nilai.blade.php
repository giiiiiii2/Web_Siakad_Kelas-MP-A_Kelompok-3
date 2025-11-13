@extends('layouts.app')

@section('title', 'Input Nilai')

@section('content')

<div class="mb-6">
    <p class="text-sm text-gray-500 mb-1">Dashboard / Mata Kuliah Saya / Kecerdasan Buatan / Input Nilai</p>
    <h1 class="text-3xl font-bold text-gray-800">Input Nilai: Kecerdasan Buatan - Kelas A</h1>
    <p class="text-gray-500 mt-1">Semester Ganjil 2023/2024</p>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 grid grid-cols-4 gap-4 mb-6">
    <div>
        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Kode MK</p>
        <p class="font-bold text-gray-800 mt-1">IF101</p>
    </div>
    <div>
        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">SKS</p>
        <p class="font-bold text-gray-800 mt-1">3</p>
    </div>
    <div>
        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Dosen Pengampu</p>
        <p class="font-bold text-gray-800 mt-1">Dr. Budi Santoso</p>
    </div>
    <div>
        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Program Studi</p>
        <p class="font-bold text-gray-800 mt-1">Teknik Informatika</p>
    </div>
</div>

<div class="flex justify-end space-x-3 items-center mb-6">
    <button class="px-5 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 font-semibold transition duration-150">
        Batalkan
    </button>
    <button class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-semibold transition duration-150 shadow-md">
        Simpan Perubahan
    </button>
    <button class="p-2 border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-100 transition duration-150 shadow-sm">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
    </button>
</div>

<div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-12">NO.</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-32">NIM</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">NAMA MAHASISWA</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-20">TUGAS</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-20">UTS</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-20">UAS</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-24">NILAI AKHIR</th>
                <th class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-16">STATUS</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 text-sm">
            <form action="#" method="POST">
            
            <tr>
                <td class="px-4 py-3 text-center text-gray-700">1</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-700">2103040001</td>
                <td class="px-4 py-3 whitespace-nowrap font-medium text-gray-800">Ahmad Fauzi</td>
                <td class="px-1 py-1 text-center"><input type="number" value="85" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="90" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="88" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-4 py-3 text-center font-bold text-gray-800">87.5</td>
                <td class="px-4 py-3 text-center"><span class="w-3 h-3 bg-green-500 rounded-full inline-block"></span></td>
            </tr>

            <tr>
                <td class="px-4 py-3 text-center text-gray-700">2</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-700">2103040002</td>
                <td class="px-4 py-3 whitespace-nowrap font-medium text-gray-800">Citra Lestari</td>
                <td class="px-1 py-1 text-center"><input type="number" value="78" class="w-16 p-1 border border-yellow-500 bg-yellow-100 rounded text-center text-sm focus:border-blue-500"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="82" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="80" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-4 py-3 text-center font-bold text-gray-800">80.0</td>
                <td class="px-4 py-3 text-center"><span class="w-3 h-3 bg-orange-500 rounded-full inline-block"></span></td>
            </tr>
            
            <tr>
                <td class="px-4 py-3 text-center text-gray-700">3</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-700">2103040003</td>
                <td class="px-4 py-3 whitespace-nowrap font-medium text-gray-800">Dewi Anggraini</td>
                <td class="px-1 py-1 text-center"><input type="number" value="92" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="88" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="95" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-4 py-3 text-center font-bold text-gray-800">91.5</td>
                <td class="px-4 py-3 text-center"><span class="w-3 h-3 bg-green-500 rounded-full inline-block"></span></td>
            </tr>
            
            <tr>
                <td class="px-4 py-3 text-center text-gray-700">4</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-700">2103040004</td>
                <td class="px-4 py-3 whitespace-nowrap font-medium text-gray-800">Eko Prasetyo</td>
                <td class="px-1 py-1 text-center"><input type="number" value="70" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="75" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" value="72" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-4 py-3 text-center font-bold text-gray-800">72.5</td>
                <td class="px-4 py-3 text-center"><span class="w-3 h-3 bg-green-500 rounded-full inline-block"></span></td>
            </tr>

            <tr>
                <td class="px-4 py-3 text-center text-gray-700">5</td>
                <td class="px-4 py-3 whitespace-nowrap text-gray-700">2103040005</td>
                <td class="px-4 py-3 whitespace-nowrap font-medium text-gray-800">Fitria Hartono</td>
                <td class="px-1 py-1 text-center"><input type="number" placeholder="" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" placeholder="" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-1 py-1 text-center"><input type="number" placeholder="" class="w-16 p-1 border border-gray-300 rounded text-center text-sm focus:border-blue-500 bg-white"></td>
                <td class="px-4 py-3 text-center font-bold text-gray-400">-</td>
                <td class="px-4 py-3 text-center"><span class="w-3 h-3 bg-gray-400 rounded-full inline-block"></span></td>
            </tr>
            </form>
        </tbody>
    </table>
</div>

@endsection