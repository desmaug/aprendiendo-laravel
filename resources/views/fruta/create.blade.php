


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación Laravel</title>

    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    @if(isset($fruta) && is_object($fruta))
        <h1>Editar Insumos</h1>

    @else
        <h1>Crear Insumos</h1>
    @endif
   

    <form action="{{ isset($fruta) ? route('frutas.update') : route('frutas.save')}}" method="POST">
        {{ csrf_field()}}
        @if(isset($fruta) && is_object($fruta))
            <input type="hidden" name="id" value="{{$fruta->id }}" required><br><br>

        @endif
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$fruta->nombre ?? ''}}" required><br><br>

        <label for="precio">Precio</label>
        <input type="number" name="precio" value="{{$fruta->precio ?? 0}}" required><br><br>

        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="{{$fruta->descripcion ?? ''}}" required><br><br>

    
        <input type="submit" value="guardar"><br><br>
    </form>

    <a  href="{{ route('frutas.index')}}" class="boton-personalizado">REGRESAR</a>



</a>
</body>
</html>