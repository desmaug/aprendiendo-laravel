<h1>{{$titulo}}</h1>
<p>index del controlador PeliculasController</p>

@if(isset($pagina))
    <h3>la pagina es {{$pagina}}</h3>
@endif

<!-- <a href="{{route('pelicula.detalle',['id' => 12])}}">Ir al Detalle</a> PASAR PARAMETROS -->

<a href="{{route('pelicula.detalle')}}">Ir al Detalle</a>
<br>
<br>
<a href="{{route('pelicula.redirigir')}}">Redirigir</a>

