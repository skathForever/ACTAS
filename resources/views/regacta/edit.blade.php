@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/regactas/{{$regacta->id}}"method="Post">

@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">Tipo Acta</label>
    <input id="id_tipo" name="id_tipo" value="{{$regacta->id_tipo}}" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tema</label>
    <input id="tema" name="tema" type="text" value="{{$regacta->tema}}" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" value="{{$regacta->hora}}" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" value="{{$regacta->fecha}}" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Relevancia</label>
    <input id="relevancia" name="relevancia" value="{{$regacta->relevancia}}" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">scan</label>
    <input id="scan" name="scan" type="file" value="{{$regacta->scan}}" class="form-control">
  </div>

  
  <a href="/regactas" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection