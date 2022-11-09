@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">CREAR  Tipo Acta 2</h1>

<form action="/otros2" method="POST" enctype="multipart/form-data">

    @csrf    
    
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tipo Acta</label>
            <select  id="id_tipo" name="id_tipo" type="text" class="form-control" tabindex="1">
            <option  value="">-Selecciona-</option>
            @foreach($tipoactas as $tipoacta)
            <option  value="{{$tipoacta->id}}">{{$tipoacta->nombre}}</option>
            @endforeach
            </select>
  </div>





  <div class="mb-3">
    <label for="" class="form-label">Tema</label>
    <input id="tema" name="tema" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Lugar</label>
    <input id="lugar" name="lugar" type="text" class="form-control">
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
    <label for="" class="form-label">Hoja de Ruta</label>
    <input id="hr" name="hr" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">scan</label>
    <input id="scan" name="scan" type="file" class="form-control">
  </div>


  <center><a href="/registroReuniones" class="btn btn-secondary">Cancelar</a>

<button type="submit" class="btn btn-primary">Guardar</button></center>
</form>

@endsection