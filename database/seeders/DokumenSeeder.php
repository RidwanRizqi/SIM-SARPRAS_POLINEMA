<?php

namespace Database\Seeders;

use App\Models\Dokumen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokumen::create(
            [
                'name' => 'Surat Permohonan',
                'file' => 'proposal.jpg',
                'keterangan' => 'Surat Permohonan'
            ]
        );

        Dokumen::create(
            [
                'name' => 'Surat Pembayaran',
                'file' => 'pembayaran.jpg',
                'keterangan' => 'Surat Pembayaran'
            ]
        );
    }
}
