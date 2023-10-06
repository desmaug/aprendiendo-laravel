<?php


namespace App\Http\Controllers;
use App\Http\Controllers\PeliculaController;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

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

    public function formulario(){

        return view('pelicula/formulario');
    }
    
    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');

        return "El nombre es: $nombre y el correo: es $email";

    }
}

