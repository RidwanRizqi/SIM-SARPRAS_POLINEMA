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


//Route::get('edit-profile', function () {
//    return view('dashboard.profile');
//})->name('profile.edit');





