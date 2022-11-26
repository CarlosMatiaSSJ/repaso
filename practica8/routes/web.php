<?php

use App\Http\Controllers\controladorAutores;
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
//edit
Route::get('libros/{id}/edit',[controladorLibros::class,'edit'])->name('libroEdit');
//update
Route::put('libros/{id}/update',[controladorLibros::class,'update'])->name('libroUpdate');
//show
Route::get('libros/{id}/show',[controladorLibros::class,'show'])->name('libroShow');
//show
Route::delete('libros/{id}/destroy',[controladorLibros::class,'destroy'])->name('libroDestroy');

//Autores
//index
Route::get('autores/index',[controladorAutores::class,'index'])->name('autorIndex');
//create
Route::get('autores/create',[controladorAutores::class,'create'])->name('autorCreate');
//store
Route::post('autores/store',[controladorAutores::class,'store'])->name('autorStore');
//edit
Route::get('autores/{id}/edit',[controladorAutores::class,'edit'])->name('autorEdit');
//update
Route::put('autores/{id}/update',[controladorAutores::class,'update'])->name('autorUpdate');
//show
Route::get('autores/{id}/show',[controladorAutores::class,'show'])->name('autorShow');
//show
Route::delete('autores/{id}/destroy',[controladorAutores::class,'destroy'])->name('autorDestroy');




