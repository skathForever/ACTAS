@extends('layouts.plantillabase');

@section('contenido')

<p></p>

<h1 class="bg-primary text-white text-center">ACTORES 2</h1>

<P></P>

<div>
  <a href="/reunions3/{{$idActa}}/ActorReunionByActa" class="btn btn-primary">Crear</a>
  <a href="/registroReuniones" class="btn btn-danger">Volver</a>

</div>

<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Actor Gamea</th>
      <th scope="col">Actor Externo</th>
      <th scope="col">Actor Organizacion</th>
      <th scope="col">Actor Urbanizacion</th>
      <th scope="col">Acta</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($reuniones as $reunion)
        <tr>
          <td>{{$reunion->id}}</td>
          <td>
              @if($reunion->id_gamea)
              {{$reunion->gameas->nombre}}
              @endif
          </td>
          <td>
              @if($reunion->id_externo)
              {{$reunion->externos->nombre}}
              @endif
          </td>
          <td>
              @if($reunion->id_organizacion)
              {{$reunion->organizaciones->nombre}}
              @endif
          </td>
          <td>
              @if($reunion->id_urbanizacion)
              {{$reunion->urbanizaciones->nombre}}
              @endif
          </td>
          <td>
              @if($reunion->id_acta)
              {{$reunion->actas->tema}}
              @endif
          </td>
            <td>
            <form action="{{ route('registroReuniones.destroy',$reunion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <!-- <a href="/actores/{{$reunion->id}}/edit"class="btn btn-info">Editar</a></a> -->
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection