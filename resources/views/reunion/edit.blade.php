@extends('layouts.plantillabase');

@section('contenido')

<h2>Editar Registros</h2>


<form action="/actores/{{$reunion->id}}"method="Post">

@csrf
@method('PUT')

<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Gamea</label>
            <select  id="id_gamea" name="id_gamea" type="text" class="form-control" tabindex="1">
            <option  value="{{$reunion->id_gamea}}">{{$reunion->id_gamea}}</option>
            @foreach($actoresGamea as $actorGamea)
            <option  value="{{$actorGamea->id}}">{{$actorGamea->nombre}}</option>
            @endforeach
            </select>
  </div>



  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Externo</label>
            <select  id="id_externo" name="id_externo" type="text" class="form-control" tabindex="1">
            <option  value="{{$reunion->id_externo}}">{{$reunion->id_externo}}</option>
            @foreach($actoresExterno as $actorExterno)
            <option  value="{{$actorExterno->id}}">{{$actorExterno->nombre}}</option>
            @endforeach
            </select>
  </div>


  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Organizacion</label>
            <select  id="id_organizacion" name="id_organizacion" type="text" class="form-control" tabindex="1">
            <option  value="{{$reunion->id_organizacion}}">{{$reunion->id_organizacion}}</option>
            @foreach($actoresOrganizaicon as $actorOrganizaicon)
            <option  value="{{$actorOrganizaicon->id}}">{{$actorOrganizaicon->nombre}}</option>
            @endforeach
            </select>
  </div>




  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Urbanizacion</label>
            <select  id="id_urbanizacion" name="id_urbanizacion" type="text" class="form-control" tabindex="1">
            <option  value="{{$reunion->id_urbanizacion}}">{{$reunion->id_urbanizacion}}</option>
            @foreach($actoresUrbanizacion as $actorUrbanizacion)
            <option  value="{{$actorUrbanizacion->id}}">{{$actorUrbanizacion->nombre}}</option>
            @endforeach
            </select>
  </div>


  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Acta</label>
            <select  id="id_acta" name="id_acta" type="text" class="form-control" tabindex="1">
            <option  value="{{$reunion->id_acta}}">{{$reunion->id_acta}}</option>
            @foreach($actas as $acta)
            <option  value="{{$acta->id}}">{{$acta->tema}}</option>
            @endforeach
            </select>
  </div>
  
  <a href="/actores" class="btn btn-secondary" tabindex="5">Cancelar</a>

  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection