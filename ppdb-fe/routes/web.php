<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

Route::get('admin-dashboard', function () {
    return view('admin/index');
});

Route::get('admin-pembayaran', function () {
    return view('admin/pembayaran');
});

Route::get('admin-pengumuman', function () {
    return view('admin/pengumuman');
});

Route::get('admin-peserta', function () {
    return view('admin/peserta');
});

Route::get('peserta-dashboard', function () {
    return view('peserta/index');
});

Route::get('peserta-pendaftaran', function () {
    return view('peserta/pendaftaran');
});


Route::get('peserta-pembayaran', function () {
    return view('peserta/pembayaran');
});

Route::get('peserta-pengumuman', function () {
    return view('peserta/pengumuman');
});

Route::get('admin-login', function () {
    return view('admin/login');
});

Route::get('admin-detail', function () {
    return view('admin/detail_peserta', [
        "title" => "PPDB Online | Detail Peserta"
    ]);
});
;*/

Route::get('/', function () {
    return view('peserta/index');
});

Route::get('admin-dashboard', function () {
    return view('admin/index', [
        "title" => "PPDB Online | Dashboard Admin"
    ]);
});

Route::get('peserta-home', function () {
    return view('peserta/index');
});

Route::get('peserta-login', function () {
    return view('peserta/login');
});

Route::get('peserta-register', function () {
    return view('peserta/register');
});

Route::get('peserta-dashboard', function () {
    return view('peserta/dashboard', [
        "title" => "PPDB Online | Dashboard Peserta"
    ]);
});


Route::get('peserta-pengumuman', function () {
    return view('peserta/pengumuman',[
        "title" => "PPDB Online | Pengumuman"
    ]);
});


Route::get('admin-login', function () {
    return view('admin/login');
});


Route::resource('admin-peserta', \App\Http\Controllers\PendaftaranController::class);

Route::resource('admin-pembayaran', \App\Http\Controllers\PembayaranController::class);

Route::get('peserta-pembayaran/tampil', [\App\Http\Controllers\PembayaranController::class, 'tampil']);

Route::resource('admin-pengumuman', \App\Http\Controllers\PengumumanController::class);