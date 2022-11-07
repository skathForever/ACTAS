@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">REGISTRAR ACTA</h1>

<p></p>

<center><a href="regactas/create"class="btn btn-primary">Crear</a></center>


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
    @foreach ($regactas as $regacta)
        <tr>
            <td>{{$regacta->id}}</td>
            <td>{{$regacta->id_tipo}}</td>
            <td>{{$regacta->tema}}</td>
            <td>{{$regacta->hora}}</td>
            <td>{{$regacta->fecha}}</td>
            <td>{{$regacta->relevencia}}</td>
            <td>{{$regacta->scan}}</td>
            
            <td>
            <form action="{{ route('regactas.destroy',$regacta->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/regactas/{{$regacta->id}}/edit"class="btn btn-info">Editar</a></a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection