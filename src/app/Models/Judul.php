<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Judul extends Model
{
    protected $table = 'juduls';

    protected $fillable = [
        'nama_judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
    ];

    // Contoh relasi jika buku memiliki judul_id
    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
