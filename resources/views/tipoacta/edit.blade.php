@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/tipoactas/{{$tipoacta->id}}"method="Post">

@csrf
@method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Tipo Acta</label>
    <input id="tipo_acta" name="tipo_acta" type="text" class="form-control" tabindex="1" value="{{$tipoacta->tipo_acta}}">    
  </div>


  
  <a href="/tipoactas" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection