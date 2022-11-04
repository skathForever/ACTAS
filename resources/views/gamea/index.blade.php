@extends('layouts.plantillabase');

@section('contenido');

<a href="gamea/create"class="btn btn-primary">Crear</a>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sigla</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($gameas as $gamea)
        <tr>
            <td>{{$gamea->id}}</td>
            <td>{{$gamea->nombre}}</td>
            <td>{{$gamea->sigla}}</td>
            <td>
                <a href="*/gamea/{{}}"class="btn btn-info">Editar</a></a>
                <a class="btn btn-info">Borrar</a>
                <button></button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection