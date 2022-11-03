@extends('layouts.plantillabase');

@section('contenido');

<h2>EDITAR REGISTROS</h2>

<form action="/gameas/{{$gamea->id}}" method="POST">

    @csrf    
    @method('PUT')
  
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$gamea->nombre}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="sigla" name="sigla" type="text" class="form-control" value="{{$gamea->sigla}}">
  </div>
  

  <a href="/articulos" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
