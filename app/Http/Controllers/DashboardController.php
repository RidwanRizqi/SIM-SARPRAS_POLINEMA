<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superadmin()
    {
        $countUser = User::where('role', 'user')->count();
        $countAdmin = User::where('role', 'admin')->count();

        return view('dashboard.superadmin', [
            'countUser' => $countUser,
            'countAdmin' => $countAdmin,
        ]);
    }

    public function admin()
    {

        $countPeminjamanValid = Peminjaman::where('id_user', auth()->user()->id)->where('status', 'valid')->count();
        $countPeminjamanProses = Peminjaman::where('id_user', auth()->user()->id)->where('status', 'proses')->count();
        $countPermintaanPeminjaman = Peminjaman::where('id_wewenang', auth()->user()->id_wewenang)->where('status', 'proses')->count();

        return view('dashboard.admin', [
            'countPeminjamanValid' => $countPeminjamanValid,
            'countPeminjamanProses' => $countPeminjamanProses,
            'countPermintaanPeminjaman' => $countPermintaanPeminjaman,
        ]);
    }

    public function user()
    {
        $countPeminjamanValid = Peminjaman::where('id_user', auth()->user()->id)->where('status', 'valid')->count();
        $countPeminjamanProses = Peminjaman::where('id_user', auth()->user()->id)->where('status', 'proses')->count();
        return view('dashboard.home', [
            'countPeminjamanValid' => $countPeminjamanValid,
            'countPeminjamanProses' => $countPeminjamanProses,
        ]);
    }
}
