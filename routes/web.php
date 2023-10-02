<?php
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index'])->name('pelicula.index');
Route::get('/detalle', [PeliculaController::class, 'detalle']);



Route::get('/usuario', [UsuarioController::class,'index']);


/*

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

Route::get('/listado-peliculas', function(){

    $titulo = 'Listado de Peliculas';
    $listado = array('Spiderman', 'Harry potter', 'Gran Torino');


    return view('/peliculas/listado')
        ->with('titulo', $titulo)
        ->with('listado_pelis', $listado);

});

Route::get('/pagina-generica', function(){
    return view('pagina');
});

*/