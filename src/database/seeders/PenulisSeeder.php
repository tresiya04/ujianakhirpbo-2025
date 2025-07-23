<?php

namespace Database\Seeders;

use App\Models\Penulis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penulis = [
            [
                'nama_penulis' => 'Andrea Hirata',
                'asal' => 'Belitung',
                'tanggal_lahir' => '1967-10-24',
                'biografi' => 'Penulis novel Laskar Pelangi.',
                'kontak' => 'andrea@example.com',
            ],
            [
                'nama_penulis' => 'Tere Liye',
                'asal' => 'Sumatera Selatan',
                'tanggal_lahir' => '1979-05-21',
                'biografi' => 'Penulis novel populer di Indonesia.',
                'kontak' => 'tere@example.com',
            ],
            [
                'nama_penulis' => 'Habiburrahman El Shirazy',
                'asal' => 'Semarang',
                'tanggal_lahir' => '1976-09-30',
                'biografi' => 'Penulis novel Ayat-Ayat Cinta.',
                'kontak' => 'habib@example.com',
            ],
        ];

        foreach ($penulis as $data) {
            Penulis::firstOrCreate(['nama_penulis' => $data['nama_penulis']], $data);
        }
    }
}
