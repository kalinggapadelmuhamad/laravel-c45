<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $c45 = new Algorithm\C45();
    $input = new Algorithm\C45\DataInput;
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::resource('profile', ProfileController::class);
    Route::resource('users', UserController::class);
    Route::resource('dataset', DataSetController::class);
});
