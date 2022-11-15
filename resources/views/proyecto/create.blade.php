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
    <select  id="estado" name="estado" class="form-select" aria-label="Default select example">
      <option selected>Seleccionar</option>
      <option value="1">Inicio</option>
      <option value="2">En Proceso</option>
      <option value="3">Terminado</option>
    </select>

  </div>



  <div class="input-group">
  <span class="input-group-text">Descripcion</span>
  <textarea id="descripcion" name="descripcion" class="form-control" aria-label="With textarea"></textarea>
</div>



  <div class="mb-3">
    <label for="" class="form-label">Scan</label>
    <input id="scan" name="scan" type="file" class="form-control" >
  </div>
  

  <a href="/proyectos" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection