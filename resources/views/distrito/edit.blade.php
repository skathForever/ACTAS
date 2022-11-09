@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/distritos/{{$distrito->id}}"method="Post">

@csrf
@method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$distrito->nombre}}">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Sigla</label>
    <input id="abreviacion" name="abreviacion" type="text" class="form-control" tabindex="1" value="{{$distrito->abreviacion}}">    
  </div>
  
  <a href="/distritos" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection