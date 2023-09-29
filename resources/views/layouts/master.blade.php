<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Titulo - @yield('titulo')</title>
    </head>
    <body>
        @section('header')
           <h1>Cabecera de la web (MASTER)</h1>
        @show
        <hr>
        <div class="container">
            @yield('content')
        </div>
        <hr>
        @section('footer')
            <h2>Pie de pagina web (MASTER)</h2>
        @show
        
        

    </body>
</html>