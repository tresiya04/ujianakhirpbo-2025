<?php

namespace Database\Seeders;

use App\Models\Judul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JudulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juduls = [
            [
                'nama_judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'tahun_terbit' => 2005,
            ],
            [
                'nama_judul' => 'Ayat-Ayat Cinta',
                'penulis' => 'Habiburrahman El Shirazy',
                'penerbit' => 'Republika',
                'tahun_terbit' => 2004,
            ],
            [
                'nama_judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'penerbit' => 'Gramedia',
                'tahun_terbit' => 2016,
            ],
        ];

        foreach ($juduls as $data) {
            Judul::firstOrCreate(['nama_judul' => $data['nama_judul']], $data);
        }
    }
}
