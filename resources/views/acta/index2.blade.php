@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">REGISTRAR ACTA 2</h1>

<p></p>

<div>
<a href="/otros3"class="btn btn-danger">Crear Acta</a>
<!-- <a href="actas/create"class="btn btn-primary">Crear</a> -->
</div>



<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">tipo acta</th>
      <th scope="col">tema</th>
      <th scope="col">lugar</th>
      <th scope="col">hora</th>
      <th scope="col">fecha</th>
      <th scope="col">relevancia</th>
      <th scope="col">hr</th>
      <th scope="col">scan</th>
      <th scope="col">proyecto</th>
      <th scope="col">documento</th>
      <th scope="col">actores</th>
      <th scope="col">proyecto</th>
 
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


            <td>
              @if($acta->id_proyecto)
              {{$acta->proyectos->nombre}}
              @endif
          </td>

  

            <td><a class="btn btn-success" href="/Archivos/{{$acta->scan}}" target="blank_">ver</a></td>
            <td>
              <a class="btn btn-primary mr-5"  href="/reunions2/{{$acta->id}}/reunionByActa" target="blank_">registrar</a>
            </td>
            <td>
              <a class="btn btn-warning mr-5"  href="/acta/{{$acta->id}}/asignarByActa" target="blank_">asignar</a>
            </td>
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


@endsection