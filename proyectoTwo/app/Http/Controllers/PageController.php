<?php

namespace App\Http\Controllers;// esta es la ruta de acceso a este controlador
// la copiamos para poder trabar con ella en las rutas
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller 
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        //$posts = Post::get();
        //$posts = Post::get();
        //$posts = Post::first();
        //$posts = Post::find(33);

        //dd($post);
        $posts = Post::latest()->paginate();
        return view('blog', ['posts' => $posts]); 
    }

    //estudiar este metodo que contiene inyeccion de dependencia
    public function post(Post $post)
    {
        
        return view('post', ['post' => $post]);
    }
}
