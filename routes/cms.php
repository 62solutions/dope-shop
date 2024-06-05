<?php

use Illuminate\Support\Facades\Route;


Route::get('/routes', [\App\Http\Controllers\IndexController::class, 'getRouter']);






