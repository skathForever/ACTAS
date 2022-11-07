@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/tipoactas/{{$tipoacta->id}}"method="Post">

@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">Tipo Acta</label>
    <input id="id_tipo" name="id_tipo" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tema</label>
    <input id="tema" name="tema" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Relevancia</label>
    <input id="relevancia" name="relevancia" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">scan</label>
    <input id="scan" name="scan" type="file" class="form-control">
  </div>

  
  <a href="/tipoactas" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection