<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class controladorLibros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultarLibros = DB::table('_tabla_libros')->get();
        return view('libros', compact('consultarLibros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorFormulario $request)
    {
        DB::table('_tabla_libros')->insert([
            "isbnLibro" => $request->input('txtIsbn'),
            "tituloLibro" => $request->input('txtTitulo'),
            "autorLibro" =>  $request->input('txtAutor'),
            "paginasLibro" =>  $request->input('txtPaginas'),
            "editorialLibro" =>  $request->input('txtEditorial'),
            "emailLibro" => $request->input('txtEmail')
        ]);
        return redirect('libros/index')->with('confirmación','abc')->with('titulo',$request->txtTitulo);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaID = DB::table('_tabla_libros')->where('idLibro',$id)->first();
        return view('editarLibro',compact('consultaID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorFormulario $request, $id)
    {
        DB::table('_tabla_libros')->where('idLibro',$id)->update([
            "isbnLibro" => $request->input('txtIsbn'),
            "tituloLibro" => $request->input('txtTitulo'),
            "autorLibro" =>  $request->input('txtAutor'),
            "paginasLibro" =>  $request->input('txtPaginas'),
            "editorialLibro" =>  $request->input('txtEditorial'),
            "emailLibro" => $request->input('txtEmail')
        ]);
        return redirect('libros/index')->with('edición','abc')->with('titulo',$request->txtTitulo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
