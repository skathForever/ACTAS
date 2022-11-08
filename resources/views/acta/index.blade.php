@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">REGISTRAR ACTA</h1>

<p></p>

<center><a href="actas/create"class="btn btn-primary">Crear</a></center>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TIPO ACTA</th>
      <th scope="col">TEMA</th>
      <th scope="col">HORA</th>
      <th scope="col">FECHA</th>
      <th scope="col">RELEVANCIA</th>
      <th scope="col">SCAN</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($actas as $acta)
        <tr>
            <td>{{$acta->id}}</td>
            <td>{{$acta->tipoactas->nombre}}</td>
            <td>{{$acta->tema}}</td>
            <td>{{$acta->hora}}</td>
            <td>{{$acta->fecha}}</td>
            <td>{{$acta->relevancia}}</td>
            <td>{{$acta->scan}}</td>
            
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