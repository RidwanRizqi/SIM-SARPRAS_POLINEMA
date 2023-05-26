<?php

namespace Database\Seeders;

use App\Models\Wewenang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WewenangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            'Jurusan Teknik Mesin',
            'Jurusan Akuntansi',
            'Jurusan Teknik Sipil',
            'Jurusan Teknik Elektro',
            'Jurusan Teknologi Informasi',
            'Jurusan Administrasi Bisnis',
            'Jurusan Teknik Kimia',
        ];

        foreach ($jurusan as $key => $value) {
            Wewenang::create([
                'name' => $value
            ]);
        }
    }
}
