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
    <h1>{{$fruta->nombre}}</h1>
    <p>{{$fruta->descripcion}}</p>

    <a  href="{{ route('frutas.index')}}" class="boton-personalizado">REGRESAR</a>


</a>
</body>
</html>