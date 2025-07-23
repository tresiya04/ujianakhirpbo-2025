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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
             $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->integer('jumlah_halaman')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('stok')->default(0);
            $table->text('deskripsi')->nullable();

            // Tambahkan foreign key genre dan penulis
            $table->foreignId('genre_id')->constrained()->cascadeOnDelete();
            $table->foreignId('penulis_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
