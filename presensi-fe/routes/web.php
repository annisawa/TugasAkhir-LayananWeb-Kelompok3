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
    	'title' => 'Presensi | SMK Cendikia'
    ]);
});

Route::get('admin-dashboard', function () {
    return view('index', [
    	'title' => 'Presensi | SMK Cendikia'
    ]);
});

Route::get('admin-jadwal', function () {
    return view('jadwal', [
    	"title" => "Jadwal Kelas | Presensi"
    ]);
});

Route::get('admin-login', function () {
    return view('login', [
    	"title" => "Login | Presensi"
    ]);
});

Route::get('admin-siswa', function () {
    return view('siswa', [
    	"title" => "Data Siswa | Presensi"
    ]);
});

Route::get('admin-presensi', function () {
    return view('siswa', [
    	"title" => "Data Presensi | Presensi"
    ]);
});
