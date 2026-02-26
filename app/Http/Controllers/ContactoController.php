<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formularioContacto()
    {
        return view('formulario-contacto');
    }

    public function recibeFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        return "Formulario recibido";
    }
}