<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function getCrearusuario(){ 
        return view('Administrador.crearusu');
    }

    public function crearUsuario(Request $request){
        $usuario = Usuario::create([
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'password' => $request->input('password'),
        ]);

        return redirect('/admin');
    }

    public function getEditarUsuario($id) {
        $usuario = Usuario::find($id);

        return view('Administrador.nuevacontra', compact('usuario'));
    }

    public function editarUsuario(Request $request, $id) {
        $usuario = Usuario::find($id);

        $usuario->nombre = $request->input('nombre');
        $usuario->correo = $request->input('correo');
        $usuario->password = $request->input('password');

        $usuario->save();

        return redirect('/admin');
    }

    public function eliminarUsuario($usuarioId) {
        $usuario = Usuario::find($usuarioId);

        $usuario->delete();

        return back();
    }
}
