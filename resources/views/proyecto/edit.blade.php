@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/proyectos/{{$proyecto->id}}"method="Post" enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$proyecto->nombre}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" value="{{$proyecto->estado}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$proyecto->descripcion}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Scan</label>
    <input id="scan" name="scan" type="file" class="form-control" value="{{$proyecto->scan}}">
  </div>

    <a href="/proyectos" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection