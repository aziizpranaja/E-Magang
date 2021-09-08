<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ApiController;
use App\http\Controllers\PembimbingController;
use App\http\Controllers\PengujiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/detail/{id}/editnilai', [ApiController::class, 'editnilai']);

Route::post('/detailpembimbing/{id}/editnilai', [PembimbingController::class, 'editnilai']);

Route::post('/detailpenguji/{id}/editnilai', [PengujiController::class, 'editnilai']);
