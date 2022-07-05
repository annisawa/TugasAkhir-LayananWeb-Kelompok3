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

Route::get('/', function () {
    return view('index', [
        'title' => "Dashboard"
    ]);
});

Route::resource('kelas', \App\Http\Controllers\KelasController::class);
Route::resource('mapel', \App\Http\Controllers\MapelController::class);
//Route::resource('pembagiankelas', \App\Http\Controllers\PembagianKelasController::class);

/*Route::get('guru', function () {
    return view('guru/data_guru');
});

Route::get('siswa', function () {
    return view('siswa/data_siswa');
});

Route::get('kelas', function () {
    return view('kelas/data_kelas');
});

Route::get('kelas/tambah', function () {
    return view('kelas/tambah_kelas');
});

Route::get('kelas/edit', function () {
    return view('kelas/edit_kelas');
});

Route::get('mapel', function () {
    return view('mapel/data_mapel');
});

Route::get('mapel/tambah', function () {
    return view('mapel/tambah_mapel');
});

Route::get('mapel/edit', function () {
    return view('mapel/edit_mapel');
});*/

Route::get('pembagiankelas', function () {
    return view('pembagiankelas/data_pembagian_kelas', [
        'title' => 'Pembagian Kelas | SMK Cendikia'
    ]);
});

Route::get('pembagiankelas/tambah', function () {
    return view('pembagiankelas/tambah_pembagian_kelas', [
        'title' => 'Tambah Pembagian Kelas  SMK Cendikia'
    ]);
});

Route::get('pembagiankelas/edit', function () {
    return view('pembagiankelas/edit_pembagian_kelas', [
        'title' => 'Edit Pembagian Kelas | SMK Cendikia'
    ]);
});

Route::get('jadwal', function () {
    return view('jadwal/data_jadwal', [
        'title' => 'Jadwal Kelas | SMK Cendikia'
    ]);
});

Route::get('jadwal/tambah', function () {
    return view('jadwal/tambah_jadwal', [
        'title' => 'Tambah Jadwal Kelas | SMK Cendikia'
    ]);
});

Route::get('jadwal/edit', function () {
    return view('jadwal/edit_jadwal', [
        'title' => 'Edit Jadwal Kelas | SMK Cendikia'
    ]);
});

Route::get('login', function () {
    return view('login');
});
