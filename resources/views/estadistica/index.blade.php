@extends('layouts.plantillabase');

@section('contenido')


<h1 class="bg-primary text-white text-center">Estadisticas</h1>




<h3 for="">Cantidad de actas registradas : </h3>
<h3 for="">{{$actas}}</h3>

<h3 for="">Cantidad de actores registradas : </h3>
<h3 for="">{{$actores}}</h3>

<h3 for="">Actores por tipo GAMEA : </h3>

@foreach ($count as $key => $value )

@endforeach





@endsection