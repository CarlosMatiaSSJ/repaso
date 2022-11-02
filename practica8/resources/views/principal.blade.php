@extends('template')
@section('titulo')
    Principal
@stop
@section('contenido')

{{-- noticia literaria --}}

<h1 class="bold" style="text-align:center mb-3">
    Annie Ernaux cambió la literatura francesa confesando lo inconfesable", dice Wendy Guerra sobre la ganadora del Nobel de Literatura
</h1>

<div class="news__excerpt" style="margin-top: 20px">
    <h3><p>"<strong><a href="https://cnnespanol.cnn.com/2022/10/06/annie-ernaux-nobel-literatura-2022-ganador-trax/">Annie Ernaux</a> </strong>cambió la literatura francesa confesando abortos ilegales, confesando amores prohibidos, confesando lo inconfesable", dice la escritora cubana-francesa Wendy Guerra. "¿Acaso no es eso parte del patrimonio esencial de la literatura femenina contemporánea?", agrega. Mira aquí las reflexiones de Guerra sobre la autoficción de Ernaux, ganadora del Premio Nobel de Literatura 2022.</p></h3>
</div>

{{-- imagenes --}}
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('imgs/libro1.jpg')}}" class="d-block w-80 h-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imgs/libro2.jpg')}}" class="d-block w-100 h-50" alt="..." >
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imgs/lirbo3.jpg')}}" class="d-block w-100 h-50" alt="..." >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

@stop
