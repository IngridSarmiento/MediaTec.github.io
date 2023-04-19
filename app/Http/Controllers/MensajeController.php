<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mensaje;


class MensajeController extends Controller
{
    public function getMensajes() {
        $mensajes = Mensaje::orderBy('create_time', 'desc')->get();

        return view('Administrador.mensajes', compact('mensajes'));
    }
}
