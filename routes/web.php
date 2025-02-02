<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController; 

Route::get('/', [IndexController::class, 'siteIndex'])->name('site.index');
Route::post('/upload', [IndexController::class, 'upload'])->name('site.upload');