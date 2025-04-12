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
        Schema::create('rekap_nilai_ojt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('penilai_id');
            $table->foreign('penilai_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('nilai_teori_ojt_id');
            $table->foreign('nilai_teori_ojt_id')->references('id')->on('nilai_teori_ojt')->onDelete('cascade');
            $table->unsignedBigInteger('tes_praktek_ojt_id');
            $table->foreign('tes_praktek_ojt_id')->references('id')->on('tes_praktek_ojt')->onDelete('cascade');
            $table->string('total_nilai_ojt');
            $table->string('status');
            $table->dateTime('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_nilai_ojt');
    }
};
