<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\http\Controllers\MahasiswaController;
use App\http\Controllers\ForgotPassController;
use App\http\Controllers\ResetPassController;
use App\http\Controllers\PenilaianController;
use App\http\Controllers\Dashboard;
use App\http\Controllers\MagangController;
use App\http\Controllers\ApproveController;
use App\http\Controllers\PresensiController;
use App\http\Controllers\PembimbingController;
use App\http\Controllers\PengujiController;
use App\http\Controllers\LaporanController;
use App\http\Controllers\RatingController;
use App\http\Controllers\GrafikController;

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
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

/*Rating Web*/
Route::post('/dashboard/rating', [RatingController::class, 'rating']);

/*Login dan Register*/
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/simpanregister', [LoginController::class, 'simpanregister'])->name('simpanregister');

/*Forget Password*/
Route::get('/forgotpass', 'App\Http\Controllers\ForgotPassController@getEmail')->name('forgotpass');
Route::post('/forgotpass', 'App\Http\Controllers\ForgotPassController@postEmail')->name('forgotpass');

/*Reset Password*/
Route::get('otp/{token}', 'App\Http\Controllers\ResetPassController@getPassword');
Route::post('otp', 'App\Http\Controllers\ResetPassController@updatePassword');

/*Admin*/
Route::group(['middleware' => ['auth:admin']], function(){
    Route::get('/admin', [MahasiswaController::class, 'index']);
    Route::get('/students/{student}', [MahasiswaController::class, 'show']);
    Route::get('/tambahdata', [MahasiswaController::class, 'create'])->name('tambahdata');
    Route::post('/admin', [MahasiswaController::class, 'store']);
    Route::delete('/students/{student}', [MahasiswaController::class, 'destroy']);
    Route::get('/students/{student}/editdata', [MahasiswaController::class, 'edit']);
    Route::patch('/students/{student}', [MahasiswaController::class, 'update']);
    Route::get('/grafik', [GrafikController::class, 'index']);
});

/*Peserta*/
Route::group(['middleware' => ['auth', 'Ceklevel:peserta']], function(){
    Route::get('/magang/add', [MagangController::class, 'add']);
    Route::post('/magang/add', [MagangController::class, 'tambah']);
    Route::get('/magang/add', [MagangController::class, 'industri']);
    Route::post('/simpan/masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
    Route::get('/presensi/masuk', [PresensiController::class, 'index']);
    Route::get('/presensi/keluar', [PresensiController::class, 'keluar']);
    Route::post('/ubah/presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
    Route::get('/tampil', [PresensiController::class, 'alldata']);
    Route::get('/tampildetail/{student}', [PresensiController::class, 'detail']);
    Route::get('/laporan', [LaporanController::class, 'tampil']);
    Route::post('/laporan', [LaporanController::class, 'addlaporan']);
});

/*Pembimbing*/
Route::group(['middleware' => ['auth', 'Ceklevel:pembimbing']], function(){
    Route::get('/penilaianpembimbing', [PembimbingController::class, 'alldata']);
    Route::get('/detailpembimbing/{student}', [PembimbingController::class, 'penilaiandetail']);
    Route::post('/detailpembimbing/{student}/addnilai', [PembimbingController::class, 'addnilai']);
    Route::get('/detailpembimbing/{id}/{idpembimbing}/deletenilai', [PembimbingController::class, 'deletenilai']);
    Route::get('/approve', [ApproveController::class, 'index']);
    Route::get('approve/{id}', [ApproveController::class, 'approved']);
    Route::get('filter-data', [PresensiController::class, 'halamanrekap'])->name('filter-data');
    Route::get('filter-data/{tglawal}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
    Route::get('/rekaplaporan', [LaporanController::class, 'alldata']);
});

/*Industri*/
Route::group(['middleware' => ['auth', 'Ceklevel:industri']], function(){
    Route::get('/penilaian', [PenilaianController::class, 'alldata']);
    Route::get('/detail/{student}', [PenilaianController::class, 'penilaiandetail']);
    Route::post('/detail/{student}/addnilai', [PenilaianController::class, 'addnilai']);
    Route::get('/detail/{id}/{idpenilaian}/deletenilai', [PenilaianController::class, 'deletenilai']);
});

/*Penguji*/
Route::group(['middleware' => ['auth', 'Ceklevel:penguji']], function(){
    Route::get('/penilaianpenguji', [PengujiController::class, 'alldata']);
    Route::get('/detailpenguji/{student}', [PengujiController::class, 'penilaiandetail']);
    Route::post('/detailpenguji/{student}/addnilai', [PengujiController::class, 'addnilai']);
    Route::get('/detailpenguji/{id}/{idpenguji}/deletenilai', [PengujiController::class, 'deletenilai']);
});

