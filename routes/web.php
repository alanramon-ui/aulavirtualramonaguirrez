<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\AireController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Alumnos
Route::get('/alumnos/inscribirse', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

// Aulas
Route::get('/aulas', [AulaController::class, 'index'])->name('aulas.index');
Route::get('/aulas/{aula}', [AulaController::class, 'show'])->name('aulas.show');

// Materias
Route::get('/materias', [MateriaController::class, 'index'])->name('materias.index');

// Horarios
Route::get('/horarios', [HorarioController::class, 'index'])->name('horarios.index');

// Aires
Route::get('/aires', [AireController::class, 'index'])->name('aires.index');