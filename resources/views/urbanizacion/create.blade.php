@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">CREAR URBANIZACION</h1>

<form action="/urbanizacions" method="POST">

    @csrf    
    
  
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="nombre" name="nombre" type="text" class="form-control">
  </div>


  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Distrito</label>
            <select  id="id_distrito" name="id_distrito" type="text" class="form-control" tabindex="1">
            <option  value="">-Selecciona-</option>
            @foreach($distritos as $distrito)
            <option  value="{{$distrito->id}}">{{$distrito->nombre}}</option>
            @endforeach
            </select>
  </div>



  <a href="/urbanizacions" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection