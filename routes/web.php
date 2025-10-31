<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ReservaController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Reserva
Route::get('/aulas/{aula}/reservar', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');

// Alumnos
Route::get('/alumnos/inscribirse', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::post('/aulas/{aula}/reportar-cambio', [AulaController::class, 'reportarCambio'])->name('aulas.reportar-cambio');

// Aulas
Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
Route::get('/aulas/{id}', [AulaController::class, 'show'])->name('aulas.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
