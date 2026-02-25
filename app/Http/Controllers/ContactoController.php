<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formularioContacto()
    {
        return view('formulario-contacto');
    }

    public function recibeFormulario()
    {
        return "Formulario recibido";
    }
}