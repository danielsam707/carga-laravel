<?php

namespace App\Http\Controllers;// esta es la ruta de acceso a este controlador
// la copiamos para poder trabar con ella en las rutas
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller 
{
    public function home()
    {
        $posts = Post::latest()->paginate();
        return view('home', ['posts' => $posts]);
    }

    //estudiar este metodo que contiene inyeccion de dependencia
    public function post(Post $post)
    {
        
        return view('post', ['post' => $post]);
    }
}
