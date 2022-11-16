@extends('layouts.plantillabase');

@section('contenido')


<h1 class="bg-primary text-white text-center">Estadisticas</h1>




<h3 style = "display:inline;" for="">Cantidad de actas registradas : </h3>
<h5 style = "display:inline;" for="">{{$actas}}</h5>
</br> 
<h3 style = "display:inline;" for="">Cantidad de actores registrados : </h3>
<h5 style = "display:inline;" for="">{{$actores}}</h5>
<!-- 
<h3 for="">{{$count}}</h3> -->

<h3 for="">Actores por tipo GAMEA : </h3>


<table id="table" class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">Dependencia</th>
      <th scope="col">Reuniones Asistidas</th>
    </tr>
  </thead>
  <tbody>
  @foreach($count as $key => $value)
    @if($key>0)
        <tr>
          <td>
          @foreach($actoresGamea as $actor)

            @if($key == $actor->id)
            <h5 style = "display:inline;" for="">{{$actor->nombre}} : </h5>
            @endif

          @endforeach

          </td>
          <td>
            <h5 style = "display:inline;"  for="">{{$value}}</h5>
          </td>

        </tr>
      @endif
    @endforeach
  </tbody>
</table>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['dac',     11],
          ['smgi',      2],
          ['otro',  2],

        ]);

        var options = {
          title: 'Reuniones Asistidas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
       <div id="piechart" style="width: 900px; height: 500px;"></div>



<h3 for="">Actores por tipo Urbanizacion : </h3>


<table id="table2" class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">Organizacion</th>
      <th scope="col">Reuniones Asistidas</th>
    </tr>
  </thead>
  <tbody>
  @foreach($count2 as $key => $value)
    @if($key>0)
        <tr>
          <td>
          @foreach($actoresUrbanizacion as $actor)

            @if($key == $actor->id)
            <h5 style = "display:inline;" for="">{{$actor->nombre}} : </h5>
            @endif

          @endforeach

          </td>
          <td>
            <h5 style = "display:inline;"  for="">{{$value}}</h5>
          </td>

        </tr>
      @endif
    @endforeach
  </tbody>
</table>

<h3 for="">Actores por tipo Organizacion : </h3>


<table id="table3" class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">Organizacion</th>
      <th scope="col">Reuniones Asistidas</th>
    </tr>
  </thead>
  <tbody>
  @foreach($count3 as $key => $value)
    @if($key>0)
        <tr>
          <td>
          @foreach($actoresOrganizacion as $actor)

            @if($key == $actor->id)
            <h5 style = "display:inline;" for="">{{$actor->nombre}} : </h5>
            @endif

          @endforeach

          </td>
          <td>
            <h5 style = "display:inline;"  for="">{{$value}}</h5>
          </td>

        </tr>
      @endif
    @endforeach
  </tbody>
</table>



<h3 for="">Actores por tipo Externos : </h3>


<table id="table4" class="table table-dark table-striped mt-4">
<thead>
    <tr>
      <th scope="col">Institucion</th>
      <th scope="col">Reuniones Asistidas</th>
    </tr>
  </thead>
  <tbody>
  @foreach($count4 as $key => $value)
    @if($key>0)
        <tr>
          <td>
          @foreach($actoresExterno as $actor)

            @if($key == $actor->id)
            <h5 style = "display:inline;" for="">{{$actor->nombre}} : </h5>
            @endif

          @endforeach

          </td>
          <td>
            <h5 style = "display:inline;"  for="">{{$value}}</h5>
          </td>

        </tr>
      @endif
    @endforeach
  </tbody>
</table>


@endsection