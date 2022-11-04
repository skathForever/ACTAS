@extends('layouts.plantillabase');

@section('contenido');

<h2>CREAR REGISTROS</h2>

<form action="/gamea" method="POST">

    @csrf    
    
  
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="nombre" name="nombre" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Sigla</label>
    <input id="sigla" name="sigla" type="text" class="form-control" >
  </div>
  

  <a href="/articulos" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
