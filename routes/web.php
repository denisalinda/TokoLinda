<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;



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
    return view('welcome');
});

Route::get('/home', function () {
    return "Hallo nama saya Denisa Mei Linda Sari";
});

Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);



Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('kategori', KategoriController::class);
});

Route::prefix('/mahasiswa')->group(function(){

    Route::get('/pendaftaran', function(){
        return 'Halaman Pendaftaran';
    })->name('mahasiswa.pendaftaran');

    Route::get('/ujian', function(){
        return 'Halaman Ujian';
    })->name('mahasiswa.ujian');

    Route::get('/nilai', function(){
        return 'Halaman Nilai';
    })->name('mahasiswa.nilai');

});

