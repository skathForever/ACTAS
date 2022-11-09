@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">PROYECTO</h1>

<P></P>

<center><a href="proyectos/create"class="btn btn-primary">Crear</a></center>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Scan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{$proyecto->id}}</td>
            <td>{{$proyecto->nombre}}</td>
            <td>{{$proyecto->estado}}</td>
            <td>{{$proyecto->descripcion}}</td>
            <td>{{$proyecto->scan}}</td>
            <td>
            <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/proyectos/{{$proyecto->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection