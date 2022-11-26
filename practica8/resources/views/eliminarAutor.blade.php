@extends('template')
@section('titulo')
    Eliminar Autor
@stop
@section('contenido')
{{-- SweetAlert --}}



{{-- Manejo de errores --}}




{{-- Libros --}}

<div class="card display-center mt-5">
    <div class="card-body">
       <h1>¿Seguro que quieres eliminar {{$consultaID->nombreAutor}}?</h1>
    </div>
    <form action="{{route('autorDestroy', $consultaID->idAutor)}}" method="post">
        @csrf
        @method('delete')
        <div class="card-footer">
            <a type="button" class="btn btn-success" href="{{route('autorIndex')}}">Cancelar</a>
            <button type="submit" class="btn btn-danger">Si, eliminar</button>
        </div>
    </form>
    
</div>

  


@stop
