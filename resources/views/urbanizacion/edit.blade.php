@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/urbanizacions/{{$urbanizacion->id}}"method="Post">

@csrf
@method('PUT')

  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$urbanizacion->nombre}}">    
  </div>

  
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Distrito</label>
            <select  id="id_distrito" name="id_distrito" type="text" class="form-control" tabindex="1">
            <option  value="{{$urbanizacion->id_distrito}}">{{$urbanizacion->distritos->nombre}}</option>
            @foreach($distritos as $distrito)
            <option  value="{{$distrito->id}}">{{$distrito->nombre}}</option>
            @endforeach
            </select>
  </div>

  
  <a href="/urbanizacions" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
