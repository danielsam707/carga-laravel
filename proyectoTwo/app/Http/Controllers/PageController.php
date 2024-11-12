<?php

namespace App\Http\Controllers;// esta es la ruta de acceso a este controlador
// la copiamos para poder trabar con ella en las rutas

use Illuminate\Http\Request;

class PageController extends Controller 
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        //consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
        return view('blog', ['posts' => $posts]); //aqui solo retorna el texto
    }

    public function post($slug)
    {
        // consulta a base de datos
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
