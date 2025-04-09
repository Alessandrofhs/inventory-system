<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilai_ojt', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('departemen');
            $table->unsignedBigInteger('materi_soal_id'); 
            $table->foreign('materi_soal_id')->references('id')->on('materi_soal')->onDelete('cascade');
            $table->string('nilai_teori');
            $table->string('nilai_praktek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ojt');
    }
};
