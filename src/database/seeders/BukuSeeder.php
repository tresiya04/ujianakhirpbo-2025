<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'tahun_terbit' => 2005,
                'jumlah_halaman' => 529,
                'isbn' => '9789791227201',
                'stok' => 10,
                'deskripsi' => 'Novel inspiratif tentang anak-anak Belitung.',
                'genre_id' => 1,
                'penulis_id' => 1,
            ],
            [
                'judul' => 'Ayat-Ayat Cinta',
                'penulis' => 'Habiburrahman El Shirazy',
                'penerbit' => 'Republika',
                'tahun_terbit' => 2004,
                'jumlah_halaman' => 418,
                'isbn' => '9789793604000',
                'stok' => 7,
                'deskripsi' => 'Kisah cinta islami yang menyentuh hati.',
                'genre_id' => 1,
                'penulis_id' => 3,
            ],
            [
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'penerbit' => 'Gramedia',
                'tahun_terbit' => 2016,
                'jumlah_halaman' => 320,
                'isbn' => '9786020324789',
                'stok' => 5,
                'deskripsi' => 'Novel drama romantis dengan tema bencana alam.',
                'genre_id' => 1,
                'penulis_id' => 2,
            ],
        ];

        foreach ($bukus as $data) {
            Buku::firstOrCreate(['judul' => $data['judul']], $data);
        }
    }
}
