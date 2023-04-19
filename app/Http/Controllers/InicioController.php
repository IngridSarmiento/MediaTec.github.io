<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publicacion;

class InicioController extends Controller
{
    public function index() {
        /* $destacados = Publicacion::where('destacado', '1')->get();
        $multimediaPrincipal = [];
        $contador = 0;
        $max = 10;
        foreach ($destacados as $destacado) {
            $publicacion = $destacado->multimedias->where('principal', '1')->where('tipo', 'imagen');
            if($publicacion != null) {
                if($contador <= $max) {
                    $multimediaPrincipal[] = $publicacion;
                    $contador++;
                }
            }
        }*/

        $destacados = Publicacion::where('destacado', '1')->take(10)->get();

        return view('MediaTec.index', compact('destacados'));
    }
}
