<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = [
        'nama_genre',
        'deskripsi',
    ];

    // Relasi ke Buku (satu genre memiliki banyak buku)
    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
