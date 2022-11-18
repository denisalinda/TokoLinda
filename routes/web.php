<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;



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



Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');
    Route::get('/produk', [ProdukController::class, 'index'])->name('admin.produk');

    Route::group(['prefix' => 'kategori'], function(){
        Route::get('/', [KategoriController::class, 'index'])->name('admin.kategori');
        Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
        Route::get('/edit', [KategoriController::class, 'edit'])->name('edit.kategori');
    });

    Route::group(['prefix' => 'produk'], function(){
        Route::get('/', [ProdukController::class, 'index'])->name('admin.produk');
        Route::get('/create', [ProdukController::class, 'create'])->name('create.produk');
        Route::get('/1', [ProdukController::class, 'show'])->name('show.produk');
        Route::get('/2', [ProdukController::class, 'edit'])->name('edit.produk');
    });
});

Route::prefix('/mahasiswa')->group(function(){

    Route::get('pendaftaran', function () {
        $title = 'Pendaftaran';
        $text = 'Halaman Pendaftaran';

        return view('mahasiswa.index', compact('title', 'text'));
    });

    Route::get('ujian', function () {
        $title = 'ujian';
        $text = 'Halaman Ujian';

        return view('mahasiswa.index', compact('title', 'text'));
    });

    Route::get('nilai', function () {
        $title = 'Nilai';
        $text = 'Halaman Nilai';

        return view('mahasiswa.index', compact('title', 'text'));
    });

});

