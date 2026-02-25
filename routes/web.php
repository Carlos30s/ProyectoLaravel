<?php

use App\Http\Controllers\HolaController;
use App\Http\Controllers\ContactoController;

Route::get('/hola-mundo', [HolaController::class, 'index']);
Route::get('/formulario-contacto', [ContactoController::class, 'formularioContacto']);
Route::post('/recibe-formulario', [ContactoController::class, 'recibeFormulario']);