<?php

use App\Http\Controllers\absensiController;
use App\Http\Controllers\presensiController;
use App\Models\presensi;
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
    return view('/layout/index');
});

Route::resource('absensi', absensiController::class);

Route::resource('presensi', presensiController::class);
// Route::resource('')
// Route::view('/dashboard', '/layout/index');

Route::get('/about', function () {
    return view('/component/about');
});

// belajar_laravel\resources\views\component\about . blade . php
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
