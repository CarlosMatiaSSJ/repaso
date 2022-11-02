<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorFormulario;


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


// Ruta para envío post
Route::post('guardarRegistro',[controladorFormulario::class,'procesarFormulario']);




