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
})->middleware(['auth', 'verified'])->name('home');


Route::get('edit-profile', function () {
    return view('dashboard.profile');
})->name('profile.edit');

Route::get('kelola-ruang', function () {
    return view('admin.kelola');
})->name('kelola.admin');

Route::get('update-admin', function () {
    return view('admin.update');
})->name('update.admin');

Route::get('edit-admin', function () {
    return view('admin.edit');
})->name('edit.admin');

Route::get('tambah-admin', function () {
    return view('admin.tambah');
})->name('tambah.admin');

Route::get('history-admin', function () {
    return view('admin.history');
})->name('history.admin');

Route::get('validasi-admin', function () {
    return view('admin.validasi');
})->name('validasi.admin');

Route::get('pelaporan-admin', function () {
    return view('admin.pelaporan');
})->name('pelaporan.admin');

Route::get('history-user', function () {
    return view('user.history');
})->name('history.user');
Route::get('validasi-user', function () {
    return view('user.validasi');
})->name('validasi.user');
Route::get('pelaporan-user', function () {
    return view('user.pelaporan');
})->name('pelaporan.user');
