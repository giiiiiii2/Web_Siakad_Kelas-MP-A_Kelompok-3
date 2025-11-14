<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id_mata_kuliah';

    protected $fillable = [
        'nama_mata_kuliah', 'sks', 'semester'
    ];

    // Many-to-Many dengan Dosen
    public function dosen()
    {
        return $this->belongsToMany(
            Dosen::class,
            'dosen_mata_kuliah',
            'id_mata_kuliah',
            'id_dosen'
        );
    }

    // Jadwal kuliah terkait
    public function jadwal()
    {
        return $this->hasMany(JadwalKuliah::class, 'id_mata_kuliah');
    }

    // krs_detail
    public function krsDetail()
    {
        return $this->hasMany(KrsDetail::class, 'id_mata_kuliah');
    }
}