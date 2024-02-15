
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
    <h1>Listado Constructora CEA</h1>
    <ul>
        @foreach($frutas as $fruta)
            <a href="{{ route('frutas.detail', ['id' => $fruta->id])}}">
                <li>{{$fruta->nombre}}</li>
            </a>
        @endforeach
    </ul>

    @if(session('status'))
        <p style="background: green; color:white;">{{session('status')}}</p>
    @endif


    <a  href="{{ route('frutas.crear')}}" class="boton-personalizado">CREAR</a>


</a>
</body>
</html>