<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\KepalaBidangController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UnduhController;
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

Route::get('/', LandingPageController::class)->name('index');
Route::resource('data', DataController::class)->only(['store']);

Route::middleware('auth')->group(function () {
    Route::get('beranda', BerandaController::class)->name('beranda');
    Route::resource('data', DataController::class)->except(['create', 'store', 'show']);
    Route::name('kata-sandi.')->group(function () {
        Route::get('kata-sandi/{user}/edit', [AuthController::class, 'edit'])
            ->name('edit');
        Route::put('kata-sandi/{user}', [AuthController::class, 'update'])
            ->name('update');
    });
    Route::get('keluar', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('masuk', [AuthController::class, 'index'])->name('login');
    Route::post('autentikasi', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('can:admin')->name('admin.')->group(function () {
    Route::get('anak', [LayananController::class, 'anak'])->name('anak');
    Route::get('perempuan', [LayananController::class, 'perempuan'])->name('perempuan');
    Route::get('ibu-hamil', [LayananController::class, 'ibuHamil'])->name('ibu_hamil');
    Route::get('disabilitas', [LayananController::class, 'disabilitas'])->name('disabilitas');
    Route::get('lansia', [LayananController::class, 'lansia'])->name('lansia');
    Route::get('lainnya', [LayananController::class, 'lainnya'])->name('lainnya');
});

Route::middleware('can:kepala-bidang')->group(function () {
    Route::resource('kelola-pengguna', PenggunaController::class)->except(['show'])->parameters([
        'kelola-pengguna' => 'user',
    ]);
    Route::resource('kepala-bidang', KepalaBidangController::class)->except(['create', 'show', 'destroy'])->parameters([
        'kepala-bidang' => 'data',
    ]);
    Route::get('unduh/{data}', UnduhController::class)->name('unduh');
});
