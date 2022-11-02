<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorFormulario extends Controller
{
    public function procesarFormulario(validadorFormulario $req){
        
        return redirect('registrar')->with('confirmación','Llegó correctamente');

    }


    public function showPrincipal(){
        return view('principal');
    }

    public function showRegistrar(){
        return view('registrar');
    }

   

}

