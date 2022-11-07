@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> <center>Bienvenidos</center> </h1>
@stop

@section('content')
    
 
  <body>
    <h1 class="bg-primary text-white text-center">Actor Gamea</h1>

    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img class="d-block w-100" src="..." alt="First slide">
      </div>
      <div class="carousel-item">
       <img class="d-block w-100" src="..." alt="Second slide">
      </div>
      <div class="carousel-item">
       <img class="d-block w-100" src="..." alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

    </div>

   


  

    <div class="container">
        @yield('contenido')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    @yield('js')
  </body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop