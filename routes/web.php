<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\MensajeController;


use App\Http\Controllers\InicioController;
use App\Http\Controllers\ColeccionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* MediaTec*/
Route::get('/', [InicioController::class, 'index']);

Route::get('nosotros', function () {
    return view('MediaTec.nosotros');
});

Route::get('politicas', function () {
    return view('MediaTec.politicas');
});

Route::get('creditos', function () {
    return view('MediaTec.creditos');
});

Route::get('terminos', function () {
    return view('MediaTec.terminos');
});

Route::get('mediadestacados', [ColeccionesController::class, 'getDestacados']);

Route::get('coleccion', function () {
    return view('MediaTec.coleccion');
});

Route::get('explorar', [ColeccionesController::class, 'todasLasPublicaciones']);

Route::get('nota/{id}', [PublicacionController::class, 'getNota']);

Route::get('mediacategorias', [CategoriaController::class, 'todasLasCategorias']);

Route::get('subcategorias/{id}', [SubcategoriaController::class, 'todasLasSubcategorias']);

Route::get('publicaciones-subcategoria/{id}', [SubcategoriaController::class, 'publicacionesSubcategoria']);

Route::get('publicaciones-filtradas/{tipo}', [ColeccionesController::class, 'explorarPorTipo']);


Route::get('cronologia', function () {
    return view('MediaTec.cronologia');
});

Route::get('contacto', function () {
    return view('MediaTec.contacto');
});



/* Administrador*/
Route::get('get-login', [LoginController::class, 'getLogin']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('get-crear-usuario', [UsuarioController::class, 'getCrearUsuario']);

Route::post('crear-usuario', [UsuarioController::class, 'crearUsuario']);

Route::get('get-editar-usuario/{id}', [UsuarioController::class, 'getEditarUsuario']);
Route::put('editar-usuario/{id}', [UsuarioController::class, 'editarUsuario']);
Route::delete('eliminar-usuario/{id}', [UsuarioController::class, 'eliminarUsuario']);

Route::get('admin', [AdminController::class, 'admin']);

Route::get('categorias', [CategoriaController::class, 'getCategorias']);
Route::get('get-crear-categoria', [CategoriaController::class, 'getCrearCategoria']);
Route::post('crear-categoria', [CategoriaController::class, 'crearCategoria']);
Route::get('get-editar-categoria/{id}', [CategoriaController::class, 'getEditarCategoria']);
Route::put('editar-categoria/{id}', [CategoriaController::class, 'editarCategoria']);
Route::delete('eliminar-categoria/{id}', [CategoriaController::class, 'eliminarCategoria']);

Route::get('get-subcategorias/{id}', [SubcategoriaController::class, 'getSubcategorias']);
Route::get('get-crear-subcategoria/{id}', [SubcategoriaController::class, 'getCrearSubcategoria']);
Route::post('crear-subcategoria/{id}', [SubcategoriaController::class, 'crearSubcategoria']);
Route::get('get-editar-subcategoria/{id}', [SubcategoriaController::class, 'getEditarSubcategoria']);
Route::put('editar-subcategoria/{id}', [SubcategoriaController::class, 'editarSubcategoria']);

Route::get('get-publicaciones/{id}', [PublicacionController::class, 'getPublicaciones']);
Route::get('get-crear-publicacion/{id}', [PublicacionController::class, 'getCrearPublicacion']);
Route::post('crear-publicacion/{id}', [PublicacionController::class, 'crearPublicacion']);
Route::get('get-editar-publicacion/{id}', [PublicacionController::class, 'getEditarPublicacion']);
Route::put('editar-publicacion/{id}', [PublicacionController::class, 'editarPublicacion']);
Route::delete('eliminar-publicacion/{id}', [PublicacionController::class, 'eliminarPublicacion']);
Route::get('destacar-publicacion/{id}/{destacado}', [PublicacionController::class, 'destacarPublicacion']);
Route::get('publicaciones-por-multimedia/{tipo}', [PublicacionController::class, 'getPublicacionesPorMultimedia']);

Route::get('get-editar-multimedia/{id}', [PublicacionController::class, 'getEditarMultimedia']);
Route::get('get-agregar-multimedia/{id}', [PublicacionController::class, 'getAgregarMultimedia']);
Route::post('agregar-multimedia/{id}', [PublicacionController::class, 'agregarMultimedia']);
Route::delete('eliminar-multimedia/{id}', [PublicacionController::class, 'eliminarMultimedia']);

Route::get('get-destacados', [PublicacionController::class, 'getDestacados']);

Route::get('get-mensajes', [MensajeController::class, 'getMensajes']);

Route::get('imagen', function () {
    return view('Administrador.imagen');
});

Route::get('destacado', function () {
    return view('Administrador.destacado');
});

Route::get('nuevacontra', function () {
    return view('Administrador.nuevacontra');
});

Route::get('crearusu', function () {
    return view('Administrador.crearusu');
});

Route::get('editarpubli', function () {
    return view('Administrador.editarpubli');
});

Route::get('editarcole', function () {
    return view('Administrador.editarcole');
});

Route::get('crearcatego', function () {
    return view('Administrador.crearcatego');
});

Route::get('editarcategori', function () {
    return view('Administrador.editarcategori');
});

Route::get('cultural', function () {
    return view('Administrador.cultural');
});

Route::get('publicación', function () {
    return view('Administrador.publicación');
});

Route::get('creardest', function () {
    return view('Administrador.creardest');
});
