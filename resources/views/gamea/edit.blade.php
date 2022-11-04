@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/gameas"method="Post">

@csrf
@method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Sigla</label>
    <input id="sigla" name="sigla" type="text" class="form-control" tabindex="1">    
  </div>
  
  <a href="/gameas" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection

