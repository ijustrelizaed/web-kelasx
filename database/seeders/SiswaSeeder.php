<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa_search;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa_search::create([
            'nama' => 'Ahmad Fadil',
            'jabatan' => 'Ketua Kelas',
            'image' => 'dRl2IeEfyGKiZ3HhSO9Xxs7xJASkTY5zskWyIcoV.jpg',
        ]);

        siswa_search::create([
            'nama' => 'Siti Nurhaliza',
            'jabatan' => 'Wakil Ketua',
            'image' => 'dRl2IeEfyGKiZ3HhSO9Xxs7xJASkTY5zskWyIcoV.jpg',
        ]);

        siswa_search::create([
            'nama' => 'Budi Santoso',
            'jabatan' => 'Sekretaris',
            'image' => 'dRl2IeEfyGKiZ3HhSO9Xxs7xJASkTY5zskWyIcoV.jpg',
        ]);

        siswa_search::create([
            'nama' => 'Maya Sari',
            'jabatan' => 'Bendahara',
            'image' => 'dRl2IeEfyGKiZ3HhSO9Xxs7xJASkTY5zskWyIcoV.jpg',
        ]);

        siswa_search::create([
            'nama' => 'Rizki Pratama',
            'jabatan' => 'Anggota',
            'image' => 'dRl2IeEfyGKiZ3HhSO9Xxs7xJASkTY5zskWyIcoV.jpg',
        ]);
    }
}
