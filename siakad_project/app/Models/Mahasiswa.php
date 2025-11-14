<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    protected $fillable = [
        'nim', 'nama', 'email', 'alamat', 'password'
    ];

    // Relasi: Mahasiswa punya banyak KRS
    public function krs()
    {
        return $this->hasMany(Krs::class, 'id_mahasiswa');
    }

    // Relasi: Mahasiswa → Absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_mahasiswa');
    }
}