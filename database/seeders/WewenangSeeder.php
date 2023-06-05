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
        Wewenang::create([
            'name' => 'Jurusan Teknik Mesin',
            'pj' => 'Indrazno Siradjuddin, ST.,MT.,Ph.D.',
            'nip' => '197012232008041321',
            'ttd' => 'ttd_pjwJTM.png'
        ]);
        Wewenang::create([
            'name' => 'Jurusan Akuntansi',
            'pj' => 'Drs Apit Miharso, MPd, Ak.',
            'nip' => '197012202008041011',
            'ttd' => 'ttd_pjwAKT.png'
        ]);
        Wewenang::create([
            'name' => 'Jurusan Teknik Sipil',
            'pj' => 'Fadjar Purnomo, S.T., M.T.',
            'nip' => '197012202006041000',
            'ttd' => 'ttd_pjwSipil.png'
        ]);
        Wewenang::create([
            'name' => 'Jurusan Teknik Elektro',
            'pj' => 'Pondi Udianto,S.Si.,MT',
            'nip' => '197512202006041002',
            'ttd' => 'ttd_pjwElektro.png'
        ]);
        Wewenang::create([
            'name' => 'Jurusan Teknologi Informasi',
            'pj' => 'Mungki Astiningrum, ST., M.Kom. ',
            'nip' => '196512202006041010',
            'ttd' => 'ttd_pjwTI.png'
        ]);
        Wewenang::create([
            'name' => 'Jurusan Administrasi Niaga',
            'pj' => 'Drs. Joni Dwi Pribadi, M.AB., M.M.',
            'nip' => '197512202006041080',
            'ttd' => 'ttd_pjwAdbis.png'
        ]);
        Wewenang::create([
            'name' => 'Jurusan Teknik Kimia',
            'pj' => 'Dr. Ir. Eko Naryono, M.T.',
            'nip' => '197312202006041060',
            'ttd' => 'ttd_pjwKimia.png'
        ]);
        Wewenang::create([
            'name' => 'Sarana-Prasarana Pusat',
            'pj' => 'Jaswadi S.E.Ak., M.Si.,. DBA.',
            'nip' => '197311102006041000',
            'ttd' => 'ttd_pjwSarpras.png'
        ]);
        Wewenang::create([
            'name' => 'Organisasi Kemahasiswaan Intra',
            'pj' => 'Dr. Eng. Anggit Murdani, S.T., M. Eng',
            'nip' => '197810252012121001',
            'ttd' => 'ttd_pjwOKI.png'
        ]);
    }
}
