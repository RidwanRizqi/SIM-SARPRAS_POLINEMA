<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::create(
            [
                'id_user' => '3',
                'id_sarana_prasarana' => '1',
                'id_wewenang' => '1',
                'dokumen' => 'test1',
                'kegiatan' => 'Kegiatan 1',
                'penanggung_jawab' => 'Penanggung Jawab 1',
                'status' => 'Proses',
                'daya_listrik' => 'Ya',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-01',
                'tanggal_selesai' => '2023-06-02'
            ]
        );

        Peminjaman::create(
            [
                'id_user' => '3',
                'id_sarana_prasarana' => '1',
                'id_wewenang' => '1',
                'dokumen' => 'test2',
                'kegiatan' => 'Kegiatan 2',
                'penanggung_jawab' => 'Penanggung Jawab 2',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-03',
                'tanggal_selesai' => '2023-06-04'
            ]
        );

        Peminjaman::create(
            [
                'id_user' => '5',
                'id_sarana_prasarana' => '1',
                'id_wewenang' => '1',
                'dokumen' => 'test3',
                'kegiatan' => 'Kegiatan 3',
                'penanggung_jawab' => 'Penanggung Jawab 2',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-05',
                'tanggal_selesai' => '2023-06-06'
            ]
        );

        Peminjaman::create(
            [
                'id_user' => '5',
                'id_sarana_prasarana' => '2',
                'id_wewenang' => '1',
                'dokumen' => 'test4',
                'kegiatan' => 'Kegiatan 4',
                'penanggung_jawab' => 'Penanggung Jawab 2',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-07',
                'tanggal_selesai' => '2023-06-08'
            ]
        );
    }
}
