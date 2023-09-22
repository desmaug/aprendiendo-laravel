<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo "<h1>Hola mundo</h1>";
    echo "<a href='mostrar-fecha'>Mostrar fecha</a>";
    echo "<br/>";
    echo "<a href='pelicula'>pelicula</a>";
});

Route::get('mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha";
    return view('/mostrar-fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay una pelicula', $year = 2023){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));