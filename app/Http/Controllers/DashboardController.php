<?php

namespace App\Http\Controllers;

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
        return view('dashboard.admin');
    }

    public function user()
    {
        return view('dashboard.home');
    }
}
