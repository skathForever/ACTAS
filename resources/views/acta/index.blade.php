@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">REGISTRAR ACTA</h1>

<p></p>

<center><a href="actas/create"class="btn btn-primary">Crear</a></center>

<div class="table-responsive">
  
<table id="table" class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TIPO ACTA</th>
      <th scope="col">TEMA</th>
      <th scope="col">LUGAR</th>
      <th scope="col">HORA</th>
      <th scope="col">FECHA</th>
      <th scope="col">RELEVANCIA</th>
      <th scope="col">HOJA DE RUTA</th>
      <th scope="col">SCAN</th>
      <th scope="col">PROYECTO</th>
      <th scope="col">ver</th>
      <th scope="col">acciones</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($actas as $acta)
        <tr>
            <td>{{$acta->id}}</td>
            <td>{{$acta->tipoactas->nombre}}</td>
            <td>{{$acta->tema}}</td>
            <td>{{$acta->lugar}}</td>
            <td>{{$acta->hora}}</td>
            <td>{{$acta->fecha}}</td>
            <td>{{$acta->relevancia}}</td>
            <td>{{$acta->hr}}</td>
            <td>{{$acta->scan}} </td>
            <td>{{$acta->id_proyecto}} </td>
            <td><a class="btn btn-success" href="Archivos/{{$acta->scan}}" target="blank_">documeto</a></td>
            <td>
            <form action="{{ route('actas.destroy',$acta->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/actas/{{$acta->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>



@endsection