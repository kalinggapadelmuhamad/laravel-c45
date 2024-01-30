<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSetController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PohonKeputusanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\Worksheet\Row;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::redirect('/', 'login');

Route::get('/', [BerandaController::class, 'index']);
Route::get('/daftar', [BerandaController::class, 'create'])->name('beranda.create');
Route::post('/daftar', [BerandaController::class, 'store'])->name('beranda.store');


Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::resource('profile', ProfileController::class);
    Route::resource('users', UserController::class);
    Route::resource('dataset', DataSetController::class);
    Route::resource('tree', PohonKeputusanController::class);
    Route::resource('alternatif', AlternatifController::class);
    Route::resource('penilaian', PenilaianController::class);
    Route::resource('hasil', HasilController::class);
});
