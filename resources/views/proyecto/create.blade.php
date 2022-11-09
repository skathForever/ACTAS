@extends('layouts.plantillabase');

@section('contenido')


<P></P>

<h1 class="bg-primary text-white text-center">CREAR PROYECTO</h1>

<P></P>

<form action="/proyectos" method="POST" enctype="multipart/form-data">

    @csrf    
    
  
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" name="estado" type="text" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Scan</label>
    <input id="scan" name="scan" type="file" class="form-control" >
  </div>
  

  <a href="/proyectos" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection