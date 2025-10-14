<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AulaController;

Route::resource('aulas', AulaController::class); 
use App\Http\Controllers\SistemaController;

Route::resource('sistemas', SistemaController::class);