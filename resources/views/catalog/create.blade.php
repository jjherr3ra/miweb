@extends('layouts.master')

@section('content')
{{--La etiqueta form queda fuera para poder modificar el method y el action del mismo--}}
    <h1>Crear pel&iacute;cula</h1>
    <form>
      @include('generics.standardForm')
    </form>
    <button type="submit" class="btn btn-default">Aceptar</button>
    <button type="reset" class="btn btn-default">Cancelar</button>
@stop
