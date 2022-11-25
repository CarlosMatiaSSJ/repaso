@extends('template')
@section('titulo')
    Registrar Autor
@stop
@section('contenido')
{{-- SweetAlert --}}

@if (session()->has('confirmación'))
<div class="alert alert-primary" role="alert">
   Autor registrado!
  </div>
      
@endif


{{-- Manejo de errores --}}




{{-- Formulario --}}
<div class="card">
    <div class="card-body">
        <form action="validarAutor" method="post">
            @csrf
            <div class="mb-3">
              <label for="NC" class="form-label">Nombre Completo: </label>
              <input type="text" class="form-control" id="NC"  name="txtNOMBRECOMPLETO" value="{{old('txtNOMBRECOMPLETO')}}">
              <p class="text-primary fst-italic">{{$errors->first('txtNOMBRECOMPLETO')}}</p>
            </div>
            <div class="mb-3">
                <label for="FN" class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="FN" name="txtFECHANACIMIENTO" value="{{old('txtFECHANACIMIENTO')}}">
                <p class="text-primary fst-italic">{{$errors->first('txtFECHANACIMIENTO')}}</p>
            </div>
            <div class="mb-3">
                <label for="LP" class="form-label">Libros publicados:</label>
                <input type="text" class="form-control" id="LP" name="txtLIBROSPUBLICADOS" value="{{old('txtLIBROSPUBLICADOS')}}">
                <p class="text-primary fst-italic">{{$errors->first('txtLIBROSPUBLICADOS')}}</p>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
  </div>

  


@stop
