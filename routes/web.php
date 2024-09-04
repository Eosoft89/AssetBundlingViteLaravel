<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::get('/pdf', [PdfController::class, 'index'])->name('pdf');
Route::get('/download', [PdfController::class, 'download'])->name('download');

