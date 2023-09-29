<!-- imprimir por pantalla -->

<h1>{{$titulo}}</h1>
<h1>{{$listado_pelis[2]}}</h1>

<!-- COMENTARIOS -->

 <!-- esto es un comentario html -->

 <?php 
    // otro comentario php
 ?>

 {{-- este es un comentario de .blade ejemplo: <h1>{{$titulo}}</h1> --}}

  <!-- MOSTRAR SI EXISTE -->

 <?= isset($director) ? $director : 'No hay director'; ?>

 {{ $director ?? 'No hay ningun directorr '}}

  <!-- CONDICIONALES-->

@if($titulo && count ($listado_pelis) >= 4) 
   <h1>EL TITULO EXISTE Y ES: {{$titulo}} Y EL LISTADO ES MAYOR IGUAL A 4</h1>
@elseif($titulo)
   <h1>EL TITULO EXISTE Y ES: {{$titulo}}, PERO EL LISTADO NO ES  MAYOR A 4</h1>

@else
   <h1>LA CONDICION NO SE HA CUMPLUDO</h1>
@endif


  <!-- BUCLES -->

@for ($i = 1; $i <= 20; $i++)
   El numero es: {{$i}}
   <br/>
@endfor

<hr>  <!-- linea -->

<?php $contador = 1 ?>

@while($contador < 50)
   @if($contador % 2 == 0)
      NUMERO PAR: {{$contador}}
      <br> <!-- salto de linea -->
   @endif
   <?php $contador++; ?>
@endwhile

<hr>  <!-- linea -->

@foreach($listado_pelis as $pelicula)

   <p>{{$pelicula}}</P>

@endforeach
