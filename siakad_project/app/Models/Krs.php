<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $table = 'krs';
    protected $primaryKey = 'id_krs';

    protected $fillable = [
        'id_mahasiswa', 'semester', 'tahun_ajaran'
    ];

    // Mahasiswa → KRS
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    // KRS → Detail
    public function detail()
    {
        return $this->hasMany(KrsDetail::class, 'id_krs');
    }
}