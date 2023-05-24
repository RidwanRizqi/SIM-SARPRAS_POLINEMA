<?php

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
                return view('dashboard.superadmin');
            } elseif (Auth::user()->role == 'admin') {
                return view('dashboard.admin');
            } else {
                return view('dashboard.home');
            }
        } else {
            return view('auth.login');
        }
    })->name('home');

    Route::middleware('can:superadmin')->group(function () {
        Route::get('kelola-superadmin', function () {
            return view('superadmin.kelola');
        })->name('kelola.superadmin');

        Route::get('superadmin-tambah-user', function () {
            return view('superadmin.formtambahuser');
        })->name('formtambahuser.superadmin');

        Route::get('daftar-user', function () {
            return view('superadmin.daftaruser');
        })->name('daftaruser.superadmin');

        Route::get('superadmin-edit-user', function () {
            return view('superadmin.formedituser');
        })->name('formedituser.superadmin');
    });

    Route::middleware('can:admin')->group(function () {
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

        Route::get('tambah-admin', function () {
            return view('admin.tambah');
        })->name('tambah.admin');

        Route::get('pinjam-admin', function () {
            return view('admin.pinjam');
        })->name('pinjam.admin');

        Route::get('update-admin', function () {
            return view('admin.update');
        })->name('update.admin');

        Route::get('edit-admin', function () {
            return view('admin.edit');
        })->name('edit.admin');
    });

    Route::middleware('can:user')->group(function () {
        Route::get('daftar-sarana-prasarana-user', function () {
            return view('user.daftarsaranaprasarana');
        })->name('daftarsaranaprasarana.user');

        Route::get('history-user', function () {
            return view('user.history');
        })->name('history.user');

        Route::get('form-user', function () {
            return view('user.form');
        })->name('form.user');
    });

    Route::get('edit-profile', function () {
        return view('dashboard.profile');
    })->name('profile.edit');
});

//Route::get('/home', function () {
//    if (Auth::check()) {
//        if (Auth::user()->role == 'superadmin') {
//            return view('dashboard.superadmin');
//        } elseif (Auth::user()->role == 'admin') {
//            return view('dashboard.admin');
//        } else {
//            return view('dashboard.home');
//        }
//    } else {
//        return view('auth.login');
//    }
//})->middleware(['auth', 'verified'])->name('home');


