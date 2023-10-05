<?php


namespace App\Http\Controllers;
use App\Http\Controllers\PeliculaController;



use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1){

        $titulo = 'listado de mis peliculas';

        return view('pelicula/index', [
            'titulo'=> $titulo,
            'pagina'=> $pagina
        ]);

    }

    public function detalle ($year = null){
        
        return view('pelicula/detalle');

    }

    public function redirigir(){

        //dd("estamos en redirigir");
        // return redirect()->route('pelicula.index');
        return redirect()->action([PeliculaController::class, 'detalle']);
    }
    
}

