<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Publicacion;
use App\Models\Multimedia;

class ColeccionesController extends Controller
{
    public function getDestacados() {
        $destacados =  Publicacion::where('destacado', '1')->get();
        
        return view('MediaTec.mediadestacados', compact('destacados'));

    }

    public function todasLasPublicaciones() {
        $publicaciones =  Publicacion::all();

        return view('MediaTec.publicaciones', compact('publicaciones'));
    }

   
    
    public function explorarPorTipo($tipo) {
        $publicaciones = DB::table('publicaciones')->join('multimedia', 'publicaciones.id', '=', 'multimedia.publicacion_id')->where('multimedia.principal', '1')->where('tipo', $tipo)->get();

        return view('MediaTec.publicacionesFiltradas', compact('publicaciones'));
    }

    
   

}
