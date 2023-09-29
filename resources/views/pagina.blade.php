@extends('layouts/master')

@section('titulo', 'Master en PHP')

@section('header')
    @parent() <!--Se usa para añadir en la cabecera-->
    <h2>Hola</h2>
@stop

@section('content')
<h1>Contenido de la pagina generica</h1>
@stop