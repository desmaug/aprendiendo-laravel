<?php
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\FrutaController;
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

Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])->name('pelicula.detalle')->middleware('testyear');

Route::get('/redirigir', [PeliculaController::class, 'redirigir'])->name('pelicula.redirigir');

Route::get('/formulario', [PeliculaController::class, 'formulario'])->name('pelicula.formulario');
Route::post('/recibir', [PeliculaController::class, 'recibir'])->name('pelicula.recibir');

Route::get('/usuario', [UsuarioController::class,'index']);

//Ruta Frutas

Route::get('/frutas', [FrutaController::class, 'index'])->name('frutas.index');
Route::get('/frutas/detail/{id}', [FrutaController::class, 'detail'])->name('frutas.detail');
Route::get('/frutas/crear', [FrutaController::class, 'create'])->name('frutas.crear');
Route::post('/frutas/save', [FrutaController::class, 'save'])->name('frutas.save');
Route::get('/frutas/delete/{id}', [FrutaController::class, 'delete'])->name('frutas.delete');
Route::get('/frutas/edit/{id}', [FrutaController::class, 'edit'])->name('frutas.edit');
Route::post('/frutas/update', [FrutaController::class, 'update'])->name('frutas.update');



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