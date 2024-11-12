<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Es para manejar solicitudes o peticiones de usuario
use App\Http\Controllers\PageController;

/**
 * Route::get    |Consultar
 * Route::post   |Guardar
 * Route::delete |Eliminar
 * Route::put    |Actualizar
 */


/**
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

 */



//En este punto formo un grupo de clase y llamo la clase una sola vez y en las rutas invocos
// los metodos de cada vista
Route::controller(PageController::class)->group(function()
{
    Route::get('/',           'home')->name('home');
    Route::get('blog',        'blog')->name('blog');
    Route::get('blog/{slug}', 'post')->name('post');
});
