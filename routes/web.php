<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BarangController;
use App\http\Controllers\ListBarang;

Route::get('/', [BarangController::class, 'index']);
Route::post('/inputBarang', [BarangController::class, 'store']);


Route::get('/editBarang/{id}', [ListBarang::class, 'editBarang']);
Route::post('/updateBarang/{id}', [ListBarang::class, 'updateBarang']);

