<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jadwal_kuliah', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->unsignedBigInteger('id_mata_kuliah');
            $table->unsignedBigInteger('id_dosen');
            $table->string('hari_jam_mulai_jam_selesai_ruang');

            $table->foreign('id_mata_kuliah')->references('id_mata_kuliah')->on('mata_kuliah')->onDelete('cascade');
            $table->foreign('id_dosen')->references('id_dosen')->on('dosen')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliah');
    }
};
