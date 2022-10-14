<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LamanController;
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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/laman/katalog', [LamanController::class, 'katalog'])->name('laman.katalog');
Route::get('/laman/transaksi', [LamanController::class, 'transaksi'])->name('laman.transaksi');
Route::post('/laman/transaksi', [LamanController::class, 'prosesTransaksi'])->name('laman.proses-transaksi');
Route::get('/laman/tentang', [LamanController::class, 'tentang'])->name('laman.tentang');
