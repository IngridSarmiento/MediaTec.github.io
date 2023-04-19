<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Subcategoria;
use App\Models\Publicacion;
use App\Models\Multimedia;


class PublicacionController extends Controller
{
    public function getPublicaciones($subcategoriaId) {        
        $publicaciones = Publicacion::where('subcategoria_id', $subcategoriaId)->orderBy('create_time', 'desc')->get();

        return view('Administrador.publicaciones', compact('publicaciones', 'subcategoriaId'));
    }

    public function getCrearPublicacion($subcategoriaId) {
        return view('Administrador.publicación', compact('subcategoriaId'));
    }

    public function crearPublicacion(Request $request, $subcategoriaId) {
        /* $publicacion = Publicacion::create([
            'titulo' => $request->input('titulo'),
            'fecha' => $request->input('fecha'),
            'descripcion' => $request->input('descripcion'),
            'subcategoria_id' => $subcategoriaId
        ]); */

        $publicacionId = DB::table('publicaciones')->insertGetId([
            'titulo' => $request->input('titulo'),
            'fecha' => $request->input('fecha'),
            'descripcion' => $request->input('descripcion'),
            'subcategoria_id' => $subcategoriaId
        ]);

        $multimediaPrincipal = $request->file('multimedia-principal');
        $rutaDestino = 'multimedia/';
        $nombreMultimedia = time().'-'.$multimediaPrincipal->getClientOriginalName();
        $cargaExitosa = $request->file('multimedia-principal')->move($rutaDestino, $nombreMultimedia);

        $multimedia = Multimedia::create([
            'ruta' => $rutaDestino.$nombreMultimedia,
            'principal' => '1',
            'tipo' => $request->input('tipo-multimedia'),
            'publicacion_id' => $publicacionId
        ]);

        $multimedias = $request->file('multimedias');

        if($multimedias != null) {
        foreach($multimedias as $multimedia) {
            
            $extension = $multimedia->extension();

            $tipo = "documento";

            $imageExtension = ['jpg', 'jpeg', 'png'];
            $videoExtension = ['mp4', 'mov', 'wmv', 'avi', 'mkv'];
            $audioExtension = ['wav', 'mp3', 'cd'];            

            if(in_array($extension, $imageExtension)) {
                $tipo = "imagen";
            }
            if(in_array($extension, $videoExtension)) {
                $tipo = "video";
            }
            if(in_array($extension, $audioExtension)) {
                $tipo = "audio";
            }

            $nombre = time().'-'.$multimedia->getClientOriginalName();
            $cargaExitosa = $multimedia->move($rutaDestino, $nombre);

            $archivo = Multimedia::create([
                'ruta' => $rutaDestino.$nombre,
                'principal' => '0',
                'tipo' => $tipo,
                'publicacion_id' => $publicacionId
            ]);
        }
    }

        return redirect('get-publicaciones/'.$subcategoriaId);
    }

    public function getEditarPublicacion($publicacionId) {
        $publicacion = Publicacion::find($publicacionId);
        
        return view('Administrador.editarpubli', compact('publicacion'));
    }

    public function editarPublicacion(Request $request, $publicacionId) {
        $publicacion = Publicacion::find($publicacionId);

        $publicacion->titulo = $request->input('titulo');
        $publicacion->fecha = $request->input('fecha');
        $publicacion->descripcion = $request->input('descripcion');

        $publicacion->save();

        return redirect('/get-subcategorias/'.$subcategoria->categoria->id);
    }

    public function eliminarPublicacion($publicacionId) {
        $publicacion = Publicacion::find($publicacionId);
        
        $publicacion->delete();

        return back();
    }

    public function destacarPublicacion($publicacionId, $destacado) {
        $publicacion = Publicacion::find($publicacionId);

        $publicacion->destacado = $destacado;
        $publicacion->save();

        return back();
    }

    public function getDestacados() {
        $destacados = Publicacion::where('destacado', '1')->get();

        return view('Administrador.destacados', compact('destacados'));
    }

    public function getPublicacionesPorMultimedia($tipo) {
        $publicaciones = DB::table('publicaciones')->join('multimedia', 'publicaciones.id', '=', 'multimedia.publicacion_id')->where('multimedia.principal', '1')->where('tipo', $tipo)->get();

        return view('Administrador.publicacionesportipo', compact('publicaciones'));
    }

    public function getEditarMultimedia($publicacionId) {        
        $multimedias = Publicacion::find($publicacionId)->multimedias;

        $multimediaPrincipal = $multimedias->where('principal', '1')->first();
        $multimediasExtra = $multimedias->where('principal', '0');

        return view('Administrador.editarmultimedia', compact('multimediaPrincipal', 'multimediasExtra'));
    }

    public function getAgregarMultimedia($publicacionId) {        
        return view('Administrador.agregarmultimedia', compact('publicacionId'));
    }

    public function agregarMultimedia(Request $request, $publicacionId) {
        $extension = $request->file('multimedia')->extension();

        $tipo = "documento";

        $imageExtension = ['jpg', 'jpeg', 'png'];
        $videoExtension = ['mp4', 'mov', 'wmv', 'avi', 'mkv'];
        $audioExtension = ['wav', 'mp3', 'cd'];

        if(in_array($extension, $imageExtension)) {
            $tipo = "imagen";
        }
        if(in_array($extension, $videoExtension)) {
            $tipo = "video";
        }
        if(in_array($extension, $audioExtension)) {
            $tipo = "audio";
        }

        $archivoMultimedia = $request->file('multimedia');
        $rutaDestino = 'multimedia/';
        $nombreMultimedia = time().'-'.$archivoMultimedia->getClientOriginalName();
        $cargaExitosa = $request->file('multimedia')->move($rutaDestino, $nombreMultimedia);
        
        $multimedia = Multimedia::create([
            'ruta' => $rutaDestino.$nombreMultimedia,
            'principal' => '0',
            'tipo' => $tipo,
            'publicacion_id' => $publicacionId
        ]);
        
        return redirect('get-editar-multimedia/'.$publicacionId);
    }

    public function eliminarMultimedia($multimediaId) {
        $multimedia = Multimedia::find($multimediaId);
        
        $multimedia->delete();

        return back();
    }

    public function getNota($publicacionId){
        $publicacion = DB::table('publicaciones')->find($publicacionId);         
               
        return view('MediaTec.nota', compact('publicacion'));
        
    }
}
