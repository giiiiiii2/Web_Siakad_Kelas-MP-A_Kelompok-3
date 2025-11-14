<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';

    protected $fillable = [
        'nama', 'nidn', 'prodi', 'email', 'password'
    ];

    // Relasi: Dosen mengajar banyak jadwal kuliah
    public function jadwal()
    {
        return $this->hasMany(JadwalKuliah::class, 'id_dosen');
    }

    // Relasi many-to-many dengan mata kuliah
    public function mataKuliah()
    {
        return $this->belongsToMany(
            MataKuliah::class,
            'dosen_mata_kuliah',
            'id_dosen',
            'id_mata_kuliah'
        );
    }
}