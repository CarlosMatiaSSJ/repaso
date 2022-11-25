<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFormulario;
use App\Http\Controllers\controladorLibros;

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

//Rutas individuales para controlador    
Route::get('/',[controladorFormulario::class,'showPrincipal'])->name('apodoPrincipal');  
Route::get('registrar',[controladorFormulario::class,'showRegistrar'])->name('apodoRegistrar');
Route::get('registrarAutor',[controladorFormulario::class,'showRegistrarAutor'])->name('apodoRegistrarAutor');


// Ruta para envío post
Route::post('guardarRegistro',[controladorFormulario::class,'procesarFormulario']);
Route::post('validarAutor',[controladorFormulario::class,'procesarAutor']);

//Libros
//index
Route::get('libros/index',[controladorLibros::class,'index'])->name('libroIndex');
//create
Route::get('libros/create',[controladorLibros::class,'create'])->name('libroCreate');
//store
Route::post('libros/store',[controladorLibros::class,'store'])->name('libroStore');




