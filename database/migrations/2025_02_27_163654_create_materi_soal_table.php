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
        Schema::create('materi_soal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id'); // Kolom FK harus unsigned
            $table->foreign('materi_id')->references('id')->on('materi')->onDelete('cascade');
            $table->unsignedBigInteger('soal_id'); // Kolom FK harus unsigned
            $table->foreign('soal_id')->references('id')->on('bank_soal')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_soal');
    }
};
