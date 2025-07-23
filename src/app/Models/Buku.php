<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
     protected $table = 'bukus';

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'jumlah_halaman',
        'isbn',
        'stok',
        'deskripsi',
        'genre_id',
        'penulis_id',
    ];

    // Relasi ke Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // Relasi ke Penulis
    public function penulisRelasi()
    {
        return $this->belongsTo(Penulis::class, 'penulis_id');
    }
}
