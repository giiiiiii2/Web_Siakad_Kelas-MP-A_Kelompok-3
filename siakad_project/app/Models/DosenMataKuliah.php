<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DosenMataKuliah extends Model
{
    protected $table = 'dosen_mata_kuliah';
    protected $primaryKey = 'id_dosen_mk';

    protected $fillable = [
        'id_dosen',
        'id_mata_kuliah'
    ];

    // Relasi ke Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    // Relasi ke Mata Kuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'id_mata_kuliah');
    }
}