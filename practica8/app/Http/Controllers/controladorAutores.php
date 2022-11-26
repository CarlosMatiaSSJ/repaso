<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorAutor;
use Illuminate\Http\Request;
use DB;

class controladorAutores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaAutores = DB::table('_tabla_autores')->get();
        return view('autores', compact('consultaAutores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrarAutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validadorAutor $request)
    {
        DB::table('_tabla_autores')->insert([
            "nombreAutor" => $request->input('txtNOMBRECOMPLETO'),
            "fechaNacimientoAutor" => $request->input('txtFECHANACIMIENTO'),
            "librosAutor" =>  $request->input('txtLIBROSPUBLICADOS'),
        ]);
        return redirect('autores/index')->with('confirmación','abc')->with('titulo',$request->txtNOMBRECOMPLETO);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaID = DB::table('_tabla_autores')->where('idAutor',$id)->first();
        return view('eliminarAutor', compact('consultaID'));
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaAutor = DB::table('_tabla_autores')->where('idAutor',$id)->first();
        return view('editarAutor', compact('consultaAutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validadorAutor $request, $id)
    {
        DB::table('_tabla_autores')->where('idAutor',$id)->update([
            "nombreAutor" => $request->input('txtNOMBRECOMPLETO'),
            "fechaNacimientoAutor" => $request->input('txtFECHANACIMIENTO'),
            "librosAutor" =>  $request->input('txtLIBROSPUBLICADOS'),
           
        ]);
        return redirect('autores/index')->with('edición','abc')->with('titulo',$request->txtNOMBRECOMPLETO);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_tabla_autores')->where('idAutor',$id)->delete();
        return redirect('autores/index')->with('eliminación','abxc');
    }

    public function librosPublicados($id)
    {
        $consultarLibros = DB::table('_tabla_libros')->where('autorLibro',$id)->get();
        return view('autorLibros',compact('consultarLibros'));
    }
}
