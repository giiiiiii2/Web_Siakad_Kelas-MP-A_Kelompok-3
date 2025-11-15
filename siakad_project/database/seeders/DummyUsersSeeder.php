<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin User',
                'email' => 'adminsiakad@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('adminsiakad123')
            ],
            [
                'name' => 'Dosen1',
                'email' => 'dosen1@gmail.com',
                'role' => 'dosen',
                'password' => bcrypt('dosen1123')
            ],
            [
                'name' => 'Mahasiswa1',
                'email' => 'mahasiswa1@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('mahasiswa1123')
            ],
        ];
        foreach ($userData as $key => $val) { 
            User::create($val);
        }
    }
}
