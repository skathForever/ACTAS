@extends('layouts.plantillabase');

@section('contenido')


<P></P>

<h1 class="bg-primary text-white text-center">CREAR ACTOR ORGANIZACION SOCIAL 2</h1>

<P></P>

<form action="/otros" method="POST">

    @csrf    

  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Gamea</label>
            <select  id="id_gamea" name="id_gamea" type="text" class="form-control" tabindex="1">
            <option  value="">-Selecciona-</option>
            @foreach($actoresGamea as $actorGamea)
            <option  value="{{$actorGamea->id}}">{{$actorGamea->nombre}}</option>
            @endforeach
            </select>
  </div>



  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Externo</label>
            <select  id="id_externo" name="id_externo" type="text" class="form-control" tabindex="1">
            <option  value="">-Selecciona-</option>
            @foreach($actoresExterno as $actorExterno)
            <option  value="{{$actorExterno->id}}">{{$actorExterno->nombre}}</option>
            @endforeach
            </select>
  </div>


  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Organizacion</label>
            <select  id="id_organizacion" name="id_organizacion" type="text" class="form-control" tabindex="1">
            <option  value="">-Selecciona-</option>
            @foreach($actoresOrganizaicon as $actorOrganizaicon)
            <option  value="{{$actorOrganizaicon->id}}">{{$actorOrganizaicon->nombre}}</option>
            @endforeach
            </select>
  </div>




  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Actor Urbanizacion</label>

</br>
        <label for="exampleInputEmail1" class="form-label">Seleccionar Distrito</label>

        <div class="mb-3">
            <select  id="distrito" name="" type="text" class="form-control" onchange="onSelectDistrito(distrito.value);" tabindex="1">
            <option  value="">-Selecciona-</option>
            @foreach($distritos as $distrito)
            <option  value="{{$distrito->id}}">{{$distrito->nombre}}</option>
            @endforeach
            </select>
  </div>
  
  
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Seleccionar Urbanizacion</label>
       
            <select  id="urbanizacion" name="id_urbanizacion" class="form-select" aria-label="Default select example" tabindex="1">
            </select>

  
  </div>

  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Acta</label>
            <select  id="id_acta" name="id_acta" type="text" class="form-control" tabindex="1" readonly>
            <option  value="{{$acta->id}}">{{$acta->tema}}</option>

            </select>
  </div>

  

  <a href="/reunions2/{{$acta->id}}/reunionByActa" class="btn btn-secondary">Cancelar</a>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>

    function onSelectDistrito($value){
        var idDistrito = $value;
        console.log(idDistrito);
        if(! idDistrito){
            $('#urbanizacion').html('<option  value="">-Selecciona-</option>');
            return;
        }
        $.get('/api/urbanizaciones/'+idDistrito+'/distrito', function (data){
            console.log(data);
            var html_select = '<option  value="">-Selecciona-</option>';
            for (var i=0; i<data.length; i++)
                html_select += '<option  value="'+data[i].id+'">'+data[i].nombre+'</option>';
            $('#urbanizacion').html(html_select);
        });

        console.log(data);
    }

</script>



@endsection

