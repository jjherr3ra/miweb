  @extends('layouts.master')

  @section('content')

  <div class="row">

      @foreach( $arrayPeliculas as $key => $pelicula)
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">

            <a class="navbar-brand" href="{{ url('/catalog/show/'.$key ) }}">
              <img src="{{$pelicula['poster']}}" style="height:200px"/>
            </a>

            <h4 style="min-height:150px;margin:5px 0 55px 0">
                {{$pelicula['title']}}
            </h4>


      </div>
      @endforeach

  @stop
