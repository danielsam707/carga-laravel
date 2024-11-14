<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Es para manejar solicitudes o peticiones de usuario
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;



//En este punto formo un grupo de clase y llamo la clase una sola vez y en las rutas invocos
// los metodos de cada vista
Route::controller(PageController::class)->group(function()
{
    Route::get('/',           'home')->name('home');
    Route::get('blog',        'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)->except(['show']);
// trabaja con todas las rutas excepto con la de show
require __DIR__.'/auth.php';





