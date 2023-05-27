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
        User::factory(10)->create();
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'role' => 'superadmin',
            'id_wewenang' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'id_wewenang' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'id_wewenang' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Pusat Komputer Polinema',
            'email' => 'puskomPLNM@gmail.com',
            'role' => 'superadmin',
            'id_wewenang' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Mesin',
            'email' => 'adminJTM@gmail.com',
            'phone' => '082696969696',
            'role' => 'admin',
            'id_wewenang' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Akuntansi',
            'email' => 'adminAKT@gmail.com',
            'phone' => '081234567890',
            'role' => 'admin',
            'id_wewenang' => '2',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Sipil',
            'email' => 'adminJTS@gmail.com',
            'phone' => '083123456789',
            'role' => 'admin',
            'id_wewenang' => '3',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Elektro',
            'email' => 'adminJTE@gmail.com',
            'phone' => '085123456789',
            'role' => 'admin',
            'id_wewenang' => '4',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknologi Informasi',
            'email' => 'adminJTI@gmail.com',
            'phone' => '0881234567897',
            'role' => 'admin',
            'id_wewenang' => '5',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Administrasi Bisnis',
            'email' => 'adminADB@gmail.com',
            'phone' => '0825678901238',
            'role' => 'admin',
            'id_wewenang' => '6',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin Jurusan Teknik Kimia',
            'email' => 'adminJTK@gmail.com',
            'phone' => '0845678901239',
            'role' => 'admin',
            'id_wewenang' => '7',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Admin AA Pusat',
            'email' => 'adminAA@gmail.com',
            'phone' => '0896789012345',
            'role' => 'admin',
            'id_wewenang' => '8',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
    }
}
