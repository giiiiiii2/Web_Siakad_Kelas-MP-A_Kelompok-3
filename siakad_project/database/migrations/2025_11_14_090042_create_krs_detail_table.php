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
        Schema::create('krs_detail', function (Blueprint $table) {
            $table->id('id_krs_detail');
            $table->unsignedBigInteger('id_krs');
            $table->unsignedBigInteger('id_mata_kuliah');

            $table->foreign('id_krs')->references('id_krs')->on('krs')->onDelete('cascade');
            $table->foreign('id_mata_kuliah')->references('id_mata_kuliah')->on('mata_kuliah')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs_detail');
    }
};
