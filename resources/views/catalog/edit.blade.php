@extends('layouts.master')

@section('content')
{{--La etiqueta form queda fuera para poder modificar el method y el action del mismo--}}
    <h1>Modificar pel&iacute;cula {{$id}}</h1>
    <form>
      {{method_field('PUT')}}
      @include('generics.standardForm')
    </form>
    <button type="submit" class="btn btn-default">Modificar pel&iacute;cula</button>
    <button type="reset" class="btn btn-default">Cancelar</button>
@stop
