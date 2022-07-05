<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('kelas', \App\Http\Controllers\API\KelasController::class);
Route::resource('mapel', \App\Http\Controllers\API\MapelController::class);
Route::resource('pembagiankelas', \App\Http\Controllers\API\PembagianKelasController::class);
Route::resource('jadwal', \App\Http\Controllers\API\JadwalController::class);
Route::get('siswa', [\App\Http\Controllers\API\PembagianKelasController::class, 'siswa']);
Route::get('guru', [\App\Http\Controllers\API\JadwalController::class, 'guru']);