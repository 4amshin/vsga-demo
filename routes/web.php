<?php

use App\Http\Controllers\AtraksiController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PemesananController;
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

// Route::get('/', function () {
//     return view('landing-page.index');
// });

Route::get('/', [AtraksiController::class, 'landingPage'])->name('landingPage');

Route::get('/atraksi/pesan/{atraksi}', [AtraksiController::class,'pesanProduk'])->name('atraksi.pesan');

/*-------------------------------PEMESANAN-------------------------------*/
Route::resource('pemesanan', PemesananController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    /*-------------------------------PENGGUNA-------------------------------*/
    Route::get('home', function () {
        return view('admin.home');
    })->name('home');

    /*-------------------------------DESTINASI-------------------------------*/
    Route::resource('destinasi', DestinasiController::class);


    /*-------------------------------ATRAKSI-------------------------------*/
    Route::resource('atraksi', DestinasiController::class);



});
