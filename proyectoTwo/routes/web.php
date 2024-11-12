<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Es para manejar solicitudes o peticiones de usuario

/**
 * Route::get    |Consultar
 * Route::post   |Guardar
 * Route::delete |Eliminar
 * Route::put    |Actualizar
 */

/** 
Route::get('/', function () { // Lo que dice que "/" es que si vamos a la raiz obtendremos una vista llamada welcome
    return view('welcome');
});


Route::get('/', function () {
    return 'Ruta Home'; //aqui no utilizamos la funcion view solo un return entre comillas simples y eso es lo que mostrara la vista
});
*/

Route::get('/', function () {
    return view('home'); //aqui ya se maneja retorno con una funcion para vistas
})->name('home');

Route::get('blog', function () {
    //consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]); //aqui solo retorna el texto
})->name('blog');

/**Estas dos antreires on las rutas mas basicas, aceptan un nombre y derectamente una funcion anonima */

Route::get('blog/{slug}', function ($slug) {
    // consulta a base de datos
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');
