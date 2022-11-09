@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">DISTRITOS</h1>

<p></p>

<center><a href="distritos/create"class="btn btn-primary">Crear</a></center>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Abreviacion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($distritos as $distrito)
        <tr>
            <td>{{$distrito->id}}</td>
            <td>{{$distrito->nombre}}</td>
            <td>{{$distrito->abreviacion}}</td>
            <td>
            <form action="{{ route('distritos.destroy',$distrito->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/distritos/{{$distrito->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection