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
        Schema::create('tes_praktek_ojt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_part_id');
            $table->foreign('type_part_id')->references('id')->on('master_tes_praktek')->onDelete('cascade');
            $table->string('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tes_praktek_ojt');
    }
};
