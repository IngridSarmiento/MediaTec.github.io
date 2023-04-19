<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller 
{
    public function getLogin() {
        return view('Administrador.login');
    }

    public function login(Request $request){
        $usuario = Usuario::where('correo',$request->input('email'))->where('password',$request->input('password'))->first();
        if($usuario!=null) {
            session(['usuario' => $usuario->nombre]);

            return redirect('/admin');
        } else {
            return back()->withErrors([
                'msg' => 'Correo o contraseña no válidos',
            ]);          

        }
    }

    public function logout() {
        session()->forget('usuario');
        
        return redirect('/get-login');
    } 
}
