<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';

    protected $fillable = [
        'nama_penulis',
        'asal',
        'tanggal_lahir',
        'biografi',
        'kontak',
    ];

    // Relasi ke Buku (satu penulis memiliki banyak buku)
    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
