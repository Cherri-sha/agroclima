<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrediksiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/prediksi', [PrediksiController::class, 'index'])->name('prediksi.index');
Route::post('/hasil-prediksi', [PrediksiController::class, 'prosesData'])->name('prediksi.proses');
Route::get('/riwayat', [PrediksiController::class, 'riwayat'])->name('riwayat');