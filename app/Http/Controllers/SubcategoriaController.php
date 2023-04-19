<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;
use App\Models\Subcategoria;

class SubcategoriaController extends Controller
{
    public function getSubcategorias($categoriaId) {
        $subcategorias = Categoria::find($categoriaId)->subcategorias;
        
        return view('Administrador.subcategorias', compact('subcategorias', 'categoriaId'));
    }

    public function getCrearSubcategoria($categoriaId) {
        return view('Administrador.crearsubcategoria', compact('categoriaId') );
    }

    public function crearSubcategoria(Request $request, $categoriaId) {
        if(!$request->hasFile('imagen')) {
            return back();
        }

        $imagen = $request->file('imagen');
        $rutaDestino = 'administrador/img/subcategorias/';
        $nombreImagen = time().'-'.$imagen->getClientOriginalName();
        $cargaExitosa = $request->file('imagen')->move($rutaDestino, $nombreImagen);

        $subcategoria = Subcategoria::create([
            'nombre' => $request->input('nombre'),
            'activo' => $request->input('estado'),
            'imagen' => $rutaDestino.$nombreImagen,
            'categoria_id' => $categoriaId
        ]);

        return redirect('get-subcategorias/'.$categoriaId);
    }

    public function getEditarSubcategoria($subcategoriaId) {
        $subcategoria = Subcategoria::find($subcategoriaId);
        
        return view('Administrador.editarsubcategoria', compact('subcategoria'));
    }

    public function editarSubcategoria(Request $request, $id) {
        $subcategoria = Subcategoria::find($id);

        $subcategoria->nombre = $request->input('nombre');
        $subcategoria->activo = $request->input('estado');

        $subcategoria->save();

        return redirect('/get-subcategorias/'.$subcategoria->categoria->id);
    }

    public function todasLasSubcategorias($categoriaId) {
        $subcategorias =  Categoria::find($categoriaId)->subcategorias;  

        return view('MediaTec.subcategorias', compact('subcategorias'));
    }

    public function publicacionesSubcategoria($subcategoriaId) {
        $publicaciones =  Subcategoria::find($subcategoriaId)->publicaciones; 
        
        return view('MediaTec.publicaciones', compact('publicaciones'));
    }
}
