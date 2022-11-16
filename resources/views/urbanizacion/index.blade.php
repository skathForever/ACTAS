@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">ACTOR URBANIZACION</h1>

<p></p>

<center><a href="urbanizacions/create"class="btn btn-primary">Crear</a></center>


<table id="table  " class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Distrito</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($urbanizacions as $urbanizacion)
        <tr>
            <td>{{$urbanizacion->id}}</td>
            <td>{{$urbanizacion->nombre}}</td>
            <td>{{$urbanizacion->distritos->nombre}}</td>
            <td>
            <form action="{{ route('urbanizacions.destroy',$urbanizacion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/urbanizacions/{{$urbanizacion->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection