@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">ACTOR ORGANIZACION SOCIAL</h1>

<P></P>

<center><a href="organizacions/create"class="btn btn-primary">Crear</a></center>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sigla</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($organizacions as $organizacion)
        <tr>
            <td>{{$organizacion->id}}</td>
            <td>{{$organizacion->nombre}}</td>
            <td>{{$organizacion->sigla}}</td>
            <td>
            <form action="{{ route('organizacions.destroy',$organizacion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/organizacions/{{$organizacion->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection