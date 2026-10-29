<?php
 
namespace App\Http\Controllers;
 
use App\Models\Libro_SO;
 
class LibroController_SO extends Controller
{
    public function index()
    {
            libro_SO::create([
                'titulo' => 'Don Quijote',
                'autor' => 'Cerventes',
             'anio_publicacion' => 2020,
        ]);

            libro_SO::create([
                'titulo' => 'Jaime y sus historias',
                'autor' => 'Cerventes',
             'anio_publicacion' => 2020,
        ]);

            libro_SO::create([
                'titulo' => 'Paco y sus historias',
                'autor' => 'Cerventes',
             'anio_publicacion' => 2020,
        ]);

            libro_SO::create([
                'titulo' => 'Mateo y sus historias',
                'autor' => 'Cerventes',
             'anio_publicacion' => 2020,
        ]);

        $libros = Libro_SO::all();
        return view('libros.index', compact('libros'));
    }
}
