<h1>Formulario en laravel</h1>

<form action="{{route('pelicula.recibir')}}" method="POST" >
    {{csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"></input>

    <label for="email">Correo</label>
    <input type="email" name="email"></input>
    <br>
    <br>
    <input type="submit" value="enviar" />

</form>