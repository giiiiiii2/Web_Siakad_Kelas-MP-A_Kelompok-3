<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $primaryKey = 'id_absensi';

    protected $fillable = [
        'id_mahasiswa', 'id_jadwal', 'status_hadir', 'tanggal'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function jadwal()
    {
        return $this->belongsTo(JadwalKuliah::class, 'id_jadwal');
    }
}