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

Route::group(['prefix'=> 'admin'], function () {
    Route::get('/', 'DashboardController@index');
    //route kategori
   Route::resource('kategori', KategoriController::class);
});

Route::get('/admin', [DashboardController::class, 'index']);

//Route::group(['prefix'=>'admin','as'=>'dashboard'], function(){
//    Route::get('/', 'DashboardController@index')->kategori('index');
//    Route::get('connect', 'DashboardController@connect')->kategori('connect');
//});


//Route::group(['prefix' => 'admin'], function(){

//    Route::get('/', 'DashboardController@index');

//});
