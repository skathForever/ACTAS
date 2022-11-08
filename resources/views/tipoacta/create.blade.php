@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">CREAR  Tipo Acta</h1>

<form action="/tipoactas" method="POST">

    @csrf    
    
  
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="nombre" name="nombre" type="text" class="form-control">
  </div>

  
  

  <a href="/tipoactas" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
