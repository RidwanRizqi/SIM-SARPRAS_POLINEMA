<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        User::factory(10)->create();
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'role' => 'superadmin',
            'id_wewenang' => '1',
            'nama_pj' => 'Super Admin',
            'ninduk_pj' => '12345689',
            'ttd_pj' => 'ttd_pjSA.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'id_wewenang' => '1',
            'nama_pj' => 'Admin 1',
            'ninduk_pj' => '12345687',
            'ttd_pj' => 'ttd_pjAM.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'id_wewenang' => '1',
            'nama_pj' => 'User 1',
            'ninduk_pj' => '12345684',
            'ttd_pj' => 'ttd_pjUS.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Pusat Komputer Polinema',
            'email' => 'puskomPLNM@gmail.com',
            'role' => 'superadmin',
            'id_wewenang' => '8',
            'nama_pj' => 'Ahmad Syahroni S.Kom., M.Kom.',
            'ninduk_pj' => '2141896365',
            'ttd_pj' => 'ttd_pjPuskom.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Mesin',
            'email' => 'adminJTM@gmail.com',
            'phone' => '082696969696',
            'role' => 'admin',
            'id_wewenang' => '1',
            'nama_pj' => 'M Yahya Fathoni S.E., M.M.',
            'ninduk_pj' => '2141896386',
            'ttd_pj' => 'ttd_pjMesin.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Akuntansi',
            'email' => 'adminAKT@gmail.com',
            'phone' => '081234567890',
            'role' => 'admin',
            'id_wewenang' => '2',
            'nama_pj' => 'Siti Munawaroh S.E., M.M.',
            'ninduk_pj' => '2141896375',
            'ttd_pj' => 'ttd_pjAkutansi.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Sipil',
            'email' => 'adminJTS@gmail.com',
            'phone' => '083123456789',
            'role' => 'admin',
            'id_wewenang' => '3',
            'nama_pj' => 'Lasiem Karminah S.T., M.T.',
            'ninduk_pj' => '2141896390',
            'ttd_pj' => 'ttd_pjSipil.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Elektro',
            'email' => 'adminJTE@gmail.com',
            'phone' => '085123456789',
            'role' => 'admin',
            'id_wewenang' => '4',
            'nama_pj' => 'Jaya Setiabudi S.T., M.T.',
            'ninduk_pj' => '2141896366',
            'ttd_pj' => 'ttd_pjElektro.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknologi Informasi',
            'email' => 'adminJTI@gmail.com',
            'phone' => '0881234567897',
            'role' => 'admin',
            'id_wewenang' => '5',
            'nama_pj' => 'Titis Mulyati S.Kom., M.Kom.',
            'ninduk_pj' => '2141896311',
            'ttd_pj' => 'ttd_pjTI.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Administrasi Niaga',
            'email' => 'adminAN@gmail.com',
            'phone' => '0825678901238',
            'role' => 'admin',
            'id_wewenang' => '6',
            'nama_pj' => 'Harsinah S.E., M.M.',
            'ninduk_pj' => '2141896331',
            'ttd_pj' => 'ttd_pjAdbis.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Kimia',
            'email' => 'adminJTK@gmail.com',
            'phone' => '0845678901239',
            'role' => 'admin',
            'id_wewenang' => '7',
            'nama_pj' => 'Nurul Hidayati S.T., M.T.',
            'ninduk_pj' => '2141896318',
            'ttd_pj' => 'ttd_pjKimia.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin AA Pusat',
            'email' => 'adminAA@gmail.com',
            'phone' => '0896789012345',
            'role' => 'admin',
            'id_wewenang' => '8',
            'nama_pj' => 'Harya Dwi Prasetya S.T., M.T.',
            'ninduk_pj' => '2141896301',
            'ttd_pj' => 'ttd_pjAA.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Organisasi Kemahasiswaan Intra',
            'email' => 'userOKI@gmail.com',
            'phone' => '0811289012345',
            'role' => 'user',
            'id_wewenang' => '9',
            'nama_pj' => 'M Abdul Muktif',
            'ninduk_pj' => '2141720018',
            'ttd_pj' => 'ttd_pjOKI.png',
            'nama_dpk' => 'Anggit Moerdani',
            'nip_dpk' => '2141000013',
            'ttd_dpk' => 'ttd_dpkOKI.png',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
    }
}
