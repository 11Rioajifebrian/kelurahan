<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RtController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('informasi', InformasiController::class);
Route::resource('jabatan', JabatanController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('rt', RtController::class);
