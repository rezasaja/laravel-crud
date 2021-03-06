<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

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

Route::get('/halo', function () {
    return "Apa kabs bosku";
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/showhtml', [HomeController::class, 'showhtml']);
Route::get('home/apakabs', [HomeController::class, 'apakabs']);
Route::get('home/pengunaanlayout', [HomeController::class, 'pengunaanlayout']);
Route::resource('pegawai', PegawaiController::class);
