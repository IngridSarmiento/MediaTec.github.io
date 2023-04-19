<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Mensaje;


class AdminController extends Controller
{
    public function admin(){
        if(session()->has('usuario')) {
            $usuarios = Usuario::all();
            $mensajes = Mensaje::orderBy('create_time', 'desc')->take(3)->get();

            return view('Administrador.index', compact('usuarios', 'mensajes'));
        } else {
            return redirect()->back();
        }
    }
}
