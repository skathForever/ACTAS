@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/acta/{{$acta->id}}/editByActa" method="Post"  >
<label for="" class="form-label">Asignar Proyecto</label>

@csrf
@method('PUT')

<div class="mb-3">
    <label for="" class="form-label">Tipo Acta</label>
    <input id="id_tipo" name="id_tipo" value="{{$acta->id_tipo}}" type="text" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tema</label>
    <input id="tema" name="tema" type="text" value="{{$acta->tema}}" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Lugar</label>
    <input id="lugar" name="lugar" type="text" value="{{$acta->lugar}}" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Hora</label>
    <input id="hora" name="hora" type="time" value="{{$acta->hora}}" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" value="{{$acta->fecha}}" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Relevancia</label>
    <input id="relevancia" name="relevancia" value="{{$acta->relevancia}}" type="text" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Hoja de Ruta</label>
    <input id="hr" name="hr" value="{{$acta->hr}}" type="text" class="form-control" readonly>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">scan</label>
    <input id="scan" name="scan" type="file" value="{{$acta->scan}}" class="form-control" readonly>
  </div>



  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">proyecto</label>
            <select  id="id_proyecto" name="id_proyecto" type="text" class="form-control" tabindex="1">
            <option  value="">-Seleccionar-</option>
            @foreach($proyectos as $proyecto)
            <option  value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
            @endforeach
            </select>
  </div>

  
  <a href="/registroReuniones" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection