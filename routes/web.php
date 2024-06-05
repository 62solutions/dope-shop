<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('welcome');
Route::get('/cms', function () {return view('admin.cms');});
Route::get('/routes', [\App\Http\Controllers\IndexController::class, 'getRouter']);


