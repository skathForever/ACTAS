@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">ACTOR GAMEA</h1>

<p></p>

<center><a href="gameas/create"class="btn btn-primary">Crear</a></center>


<table id="table" class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sigla</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($gameas as $gamea)
        <tr>
            <td>{{$gamea->id}}</td>
            <td>{{$gamea->nombre}}</td>
            <td>{{$gamea->sigla}}</td>
            <td>
            <form action="{{ route('gameas.destroy',$gamea->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/gameas/{{$gamea->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection