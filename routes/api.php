<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('gempa')->group(function () {
    Route::get('/public/post', [App\Http\Controllers\FetchController::class, 'getData']);
    Route::get('/public/post/{kota}', [App\Http\Controllers\FetchController::class, 'showData']);
    Route::get('/public/post/{kota}/{provinsi}', [App\Http\Controllers\FetchController::class, 'getDataByKota']);
});

