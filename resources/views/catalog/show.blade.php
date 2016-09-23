@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="{{$arrayPeliculas[$id]['poster']}}" style="height:400px"/>


    </div>
    <div class="col-sm-8">

        <h1>{{$arrayPeliculas[$id]['title']}}</h1><br><br>
        <b >Ano: </b>{{$arrayPeliculas[$id]['year']}}<br><br>
        <b >Director: </b>{{$arrayPeliculas[$id]['director']}}<br><br>
        <b >Resumen:</b> {{$arrayPeliculas[$id]['synopsis']}}<br><br>
        @if($arrayPeliculas[$id]['rented'])
          <b >Estado: </b>  Película actualmente alquilada <br><br>
          <a class="btn btn-danger"> Devolver pelicula </a>
        @else
          <b >Estado: </b>  Película disponible <br><br>
          <a class="btn btn-success"> Alquilar pelicula </a>
        @endif
        <a class="btn btn-warning"href=" {{ url('/catalog/edit/' )}}/{{$id}}"> Editar pelicula </a>
        <a class="btn btn-default" href="{{ url('/catalog/' ) }}">Volver al listado</a>
    </div>
</div>
</div>


<div class="col-sm-8">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=162980340808914";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-like" data-href="https://www.facebook.com/Conoce-el-lago-de-la-sabana-221921697863551/" data-width="100" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>


@stop
