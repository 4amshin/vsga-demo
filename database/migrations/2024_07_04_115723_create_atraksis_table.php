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
        Schema::create('atraksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_atraksi');
            $table->string('gambar')->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->decimal('harga', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atraksis');
    }
};
