<?php

use App\Http\Controllers\HolaController;

Route::get('/hola-mundo', [HolaController::class, 'index']);
