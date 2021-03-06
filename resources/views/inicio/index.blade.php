@extends('welcome')
@section('title', 'Bienvenidos a Hotel Acuerela')
@section('contenido')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="carousel/1.png" alt="baños" style="width: 100%;">
      <div class="carousel-caption">
        <h3>Talcahuano</h3>
        <p>Hotel Acuarella</p>
      </div>
    </div>
    <div class="item">
      <img src="carousel/2.png" alt="tits" style="width: 100%;">
      <div class="carousel-caption">
        <h3>Hotel Acuarella</h3>
        <p>Nuestras Instalaciones</p>
      </div>
    </div>
    <div class="item">
      <img src="carousel/3.png" alt="wisky" style="width: 100%;">
      <div class="carousel-caption">
        <h3>Nuestras Habitaciones</h3>
        <p>Single, doble y triples.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>



@endsection