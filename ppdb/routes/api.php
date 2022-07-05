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

Route::resource('pendaftaran', \App\Http\Controllers\API\PendaftaranController::class);

Route::resource('buktipembayaran', \App\Http\Controllers\API\BuktiPembayaranController::class);

Route::resource('pengumuman', \App\Http\Controllers\API\PengumumanController::class);