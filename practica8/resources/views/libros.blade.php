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
@if (session()->has('edición'))
    <?php $titulo = session()->get('titulo')?>
    {!!"<script>Swal.fire(
        'Correcto!',
        'Se ha editado el libro: {$titulo} correctamente!',
        'success'
      )</script>"!!}
      
@endif
@if (session()->has('eliminación'))
    {!!"<script>Swal.fire(
        'Correcto!',
        'Se ha eliminado el libro correctamente!',
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
                <th scope="col">Páginas</th>
                <th scope="col">Acciones:</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($consultarLibros as $libros)
                
                    
                
                <tr>
                    <th scope="row">{{$libros->isbnLibro}}</th>
                    <td >{{$libros->tituloLibro}}</td>
                    <td >{{$libros->paginasLibro}}</td>
                    <td>
                        <a type="button" href="{{route('libroEdit',$libros->idLibro)}}" class="btn btn-warning">Editar</a>
                        <a type="button" class="btn btn-danger" href="{{route('libroShow',$libros->idLibro)}}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>

  


@stop
