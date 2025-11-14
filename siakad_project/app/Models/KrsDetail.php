<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrsDetail extends Model
{
    protected $table = 'krs_detail';
    protected $primaryKey = 'id_krs_detail';

    protected $fillable = [
        'id_krs', 'id_mata_kuliah'
    ];

    public function krs()
    {
        return $this->belongsTo(Krs::class, 'id_krs');
    }

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'id_mata_kuliah');
    }
}