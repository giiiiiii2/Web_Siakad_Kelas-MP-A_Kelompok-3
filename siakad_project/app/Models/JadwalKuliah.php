<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    protected $table = 'jadwal_kuliah';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'id_mata_kuliah', 'id_dosen', 'hari_jam_mulai_jam_selesai_ruang'
    ];

    // Relasi ke dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    // Relasi ke mata kuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'id_mata_kuliah');
    }

    // Absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_jadwal');
    }
}