@extends('layouts.plantillabase');

@section('contenido')

<h1 class="bg-primary text-white text-center">PROYECTO</h1>



<a href="proyectos/create"class="btn btn-primary mb-3">Crear</a>
</br>


<table id="table" class="table table-dark table-striped mt-4">
<thead class="bg-primary text-white">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estado</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Scan</th>
      <th scope="col">documento</th>
      <th scope="col">Actas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead >
  <tbody>
    @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{$proyecto->id}}</td>
            <td>{{$proyecto->nombre}}</td>
            <td>
              {{$proyecto->estado}}
            </td>
            <td>{{$proyecto->descripcion}}</td>
            <td>{{$proyecto->scan}}</td>
            <td><a class="btn btn-success" href="Archivos/{{$proyecto->scan}}" target="blank_">ver</a></td>
            <td>  <a href="/acta/{{$proyecto->id}}/actaByProyecto"class="btn btn-warning">Ver</a></td>
            <td>
            <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/proyectos/{{$proyecto->id}}/edit"class="btn btn-info">Editar</a>
                <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection