<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanAdminController;
use App\Http\Controllers\PeminjamanUserController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\LaporanAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::get('/log-in', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        if (Auth::check()) {
            if (Auth::user()->role == 'superadmin') {
                return (new DashboardController)->superadmin();
            } elseif (Auth::user()->role == 'admin') {
                return (new DashboardController)->admin();
            } else {
                return (new DashboardController)->user();
            }
        } else {
            return view('auth.login');
        }
    })->name('home');
});

//    Route::get('edit-profile', function () {
//        return view('dashboard.profile');
//    })->name('profile.edit');

Route::get('edit-profile', function () {
    if (Auth::check()) {
        if (Auth::user()->role == 'superadmin') {
            return view('superadmin.profile_Sadmin');
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.profile_admin');
        } else {
            return view('user.profile_user');
        }
    } else {
        return view('auth.login');
    }
})->name('profile.edit');

Route::middleware('can:superadmin')->group(function () {
    Route::get('kelola-superadmin', function () {
        return view('superadmin.kelola');
    })->name('kelola.superadmin');

    Route::resource('users', UserController::class);
});

Route::middleware('can:admin')->group(function () {
    Route::get('daftar-sarana-prasarana-admin', [SarprasController::class, 'admin'])->name('daftarsaranaprasarana.admin');

    Route::resource('peminjaman-admin', PeminjamanAdminController::class);

    Route::get('laporan-pdf',[LaporanAdminController::class, 'generatePDF'])->name('laporan.pdf');

    Route::get('kelola-ruang', function () {
        return view('admin.kelola');
    })->name('kelola.admin');

    Route::get('history-admin', function () {
        return view('admin.history');
    })->name('history.admin');

    Route::get('validasi-admin', function () {
        return view('admin.validasi');
    })->name('validasi.admin');

    Route::get('pelaporan-admin', function () {
        return view('admin.pelaporan');
    })->name('pelaporan.admin');

    Route::resource('sarpras', SarprasController::class);
});

Route::middleware('can:user')->group(function () {
    Route::get('daftar-sarana-prasarana-user', [SarprasController::class, 'user'])->name('daftarsaranaprasarana.user');

//        Route::get('daftar-sarana-prasarana-user', function () {
//            return view('user.daftarsaranaprasarana');
//        })->name('daftarsaranaprasarana.user');

    Route::resource('peminjaman-user', PeminjamanUserController::class);

    Route::get('history-user', function () {
        return view('user.history');
    })->name('history.user');

    Route::get('form-user', function () {
        return view('user.form');
    })->name('form.user');
});



