@extends('layouts.plantillabase');

@section('contenido')


<P></P>

<h1 class="bg-primary text-white text-center">CREAR ACTOR ORGANIZACION SOCIAL</h1>

<P></P>

<form action="/organizacions" method="POST">

    @csrf    
    
  
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="nombre" name="nombre" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Sigla</label>
    <input id="sigla" name="sigla" type="text" class="form-control" >
  </div>
  

  <a href="/organizacions" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection