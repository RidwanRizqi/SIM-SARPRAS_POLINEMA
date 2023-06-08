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
                'nim' => '1234567890',
                'status' => 'Proses',
                'daya_listrik' => 'Ya',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-01',
                'tanggal_selesai' => '2023-06-02',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00'
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
                'nim' => '1234567890',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-03',
                'tanggal_selesai' => '2023-06-04',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00'
            ]
        );

        Peminjaman::create(
            [
                'id_user' => '5',
                'id_sarana_prasarana' => '1',
                'id_wewenang' => '1',
                'dokumen' => 'test3',
                'kegiatan' => 'Kegiatan 3',
                'penanggung_jawab' => 'Penanggung Jawab 3',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-05',
                'tanggal_selesai' => '2023-06-06',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00'
            ]
        );

        Peminjaman::create(
            [
                'id_user' => '5',
                'id_sarana_prasarana' => '2',
                'id_wewenang' => '1',
                'dokumen' => 'test4',
                'kegiatan' => 'Kegiatan 4',
                'penanggung_jawab' => 'Penanggung Jawab 4',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-07',
                'tanggal_selesai' => '2023-06-08',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00'
            ]
        );
        Peminjaman::create(
            [
                'id_user' => '13',
                'id_sarana_prasarana' => '33',
                'id_wewenang' => '8',
                'dokumen' => 'test4',
                'kegiatan' => 'Kegiatan 5',
                'penanggung_jawab' => 'Penanggung Jawab 4',
                'status' => 'Valid',
                'daya_listrik' => 'Tidak',
                'catatan_admin' => 'Catatan Admin 1',
                'tanggal_mulai' => '2023-06-07',
                'tanggal_selesai' => '2023-06-08',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00'
            ]
        );
    }
}
