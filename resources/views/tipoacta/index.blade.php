@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">ACTOR TIPO ACTA</h1>

<p></p>

<center><a href="tipoactas/create"class="btn btn-primary">Crear</a></center>


<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipo Actas</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($tipoactas as $tipoacta)
        <tr>
            <td>{{$tipoacta->id}}</td>
            <td>{{$tipoacta->nombre}}</td>
            
            <td>
            <form action="{{ route('tipoactas.destroy',$tipoacta->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/tipoactas/{{$tipoacta->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection