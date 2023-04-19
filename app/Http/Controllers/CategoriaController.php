<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function getCategorias() {
        $categorias = Categoria::all();

        return view('Administrador.categorias', compact('categorias'));
    }

    public function getCrearCategoria() {
        return view('Administrador.crearcategoria');
    }

    public function crearCategoria(Request $request) {
        if(!$request->hasFile('imagen')) {
            return back();
        }

        $imagen = $request->file('imagen');
        $rutaDestino = 'administrador/img/categorias/';
        $nombreImagen = time().'-'.$imagen->getClientOriginalName();
        $cargaExitosa = $request->file('imagen')->move($rutaDestino, $nombreImagen);

        $categoria = Categoria::create([
            'nombre' => $request->input('nombre'),
            'activo' => $request->input('estado'),
            'imagen' => $rutaDestino.$nombreImagen,
        ]);

        return redirect()->back();
    }

    public function geteditarCategoria($id) {
        $categoria = Categoria::find($id);

        return view('Administrador.editarcategoria', compact('categoria'));
    }

    public function editarCategoria(Request $request, $id) {
        $categoria = Categoria::find($id);

        $categoria->nombre = $request->input('nombre');
        $categoria->activo = $request->input('estado');

        $categoria->save();

        return redirect('/categorias');
    }


    public function eliminarCategoria($categoriaId) {
        $categoria = Usuario::find($categoriaId);

        $categoria->delete();

        return back();
    }

    public function todasLasCategorias() {
        $categorias =  DB::table('categorias')->get();

        return view('MediaTec.mediacategorias', compact('categorias'));
    }
    


}
