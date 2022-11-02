@extends('template')
@section('titulo')
    Registrar 
@stop
@section('contenido')
{{-- Formulario --}}
<div class="card">
    <div class="card-body">
        <form>
            <div class="mb-3">
              <label for="isbn" class="form-label">ISBN</label>
              <input type="text" class="form-control" id="isbn"  name="txtIsbn">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="txtTitulo">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor" name="txtAutor">
            </div>
            <div class="mb-3">
                <label for="paginas" class="form-label">Páginas</label>
                <input type="text" class="form-control" id="paginas" name="txtPaginas">
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="txtEditorial">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail de la editorial</label>
                <input type="email" class="form-control" id="email" name="txtEmail">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
  </div>




@stop
