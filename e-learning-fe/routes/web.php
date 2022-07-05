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
    	"title" => "Dashboard E-Learning"
    ]);
});

Route::get('admin-dashboard', function () {
    return view('index', [
    	"title" => "Dashboard E-Learning"
    ]);
});

Route::get('admin-jadwal', function () {
    return view('jadwal', [
    	"title" => "Jadwal Kelas | E-Learning"
    ]);
});

Route::get('admin-login', function () {
    return view('login', [
    	"title" => "Login | E-Learning"
    ]);
});

Route::get('admin-tugas', function () {
    return view('tugas', [
    	"title" => "Tugas | E-Learning"
    ]);
});

Route::get('admin-materi', function () {
    return view('materi', [
    	"title" => "Materi | E-Learning"
    ]);
});
