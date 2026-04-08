<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController; /* Se importan los controladores */

Route::view('/', 'home');
Route::view('/sobre-mi', 'sobre-mi');
Route::view('/contacto', 'contacto');
Route::post('/contacto', [ContactoController::class, 'procesar']);