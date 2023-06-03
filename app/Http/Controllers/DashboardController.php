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
        $countPeminjamanValid = Peminjaman::where('status', 'valid')->count();
        $countPeminjamanProses = Peminjaman::where('status', 'proses')->count();
        return view('dashboard.admin', [
            'countPeminjamanValid' => $countPeminjamanValid,
            'countPeminjamanProses' => $countPeminjamanProses,
        ]);
    }

    public function user()
    {
        return view('dashboard.home');
    }
}
