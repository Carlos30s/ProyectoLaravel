<?php

use Illuminate\Support\Facades\Route;

Route::get('/hola-mundo', function () {
    return view('hola');
});