@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">ACTOR EXTERNO</h1>

<p></p>

<center><a href="externos/create"class="btn btn-primary">Crear</a></center>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sigla</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($externos as $externo)
        <tr>
            <td>{{$externo->id}}</td>
            <td>{{$externo->nombre}}</td>
            <td>{{$externo->sigla}}</td>
            <td>
            <form action="{{ route('externos.destroy',$externo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/externos/{{$externo->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection