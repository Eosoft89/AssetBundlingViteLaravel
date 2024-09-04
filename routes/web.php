<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome')->name('welcome');
Route::get('/', [PdfController::class, 'index'])->name('welcome');
Route::get('/download', [PdfController::class, 'download'])->name('download');

