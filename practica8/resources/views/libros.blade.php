@extends('template')
@section('titulo')
    Libros 
@stop
@section('contenido')
{{-- SweetAlert --}}

@if (session()->has('confirmación'))
    <?php $titulo = session()->get('titulo')?>
    {!!"<script>Swal.fire(
        'Correcto!',
        'Se ha registrado {$titulo} correctamente!',
        'success'
      )</script>"!!}
      
@endif


{{-- Manejo de errores --}}




{{-- Libros --}}

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Acciones:</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($consultarLibros as $libros)
                <tr>
                    <th scope="row">{{$libros->isbnLibro}}</th>
                    <td >{{$libros->tituloLibro}}</td>
                    <td >{{$libros->autorLibro}}</td>
                    <td>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

  


@stop
