<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['nama_genre' => 'Fiksi', 'deskripsi' => 'Cerita rekaan atau imajinasi'],
            ['nama_genre' => 'Non-Fiksi', 'deskripsi' => 'Berdasarkan fakta dan kenyataan'],
            ['nama_genre' => 'Biografi', 'deskripsi' => 'Kisah hidup seseorang'],
            ['nama_genre' => 'Sains', 'deskripsi' => 'Ilmu pengetahuan alam dan sosial'],
            ['nama_genre' => 'Teknologi', 'deskripsi' => 'Ilmu dan penerapan teknologi'],
            ['nama_genre' => 'Sejarah', 'deskripsi' => 'Peristiwa masa lalu'],
            ['nama_genre' => 'Agama', 'deskripsi' => 'Kepercayaan dan ibadah'],
        ];

        foreach ($genres as $genre) {
            Genre::firstOrCreate(['nama_genre' => $genre['nama_genre']], $genre);
        }
    }
}
