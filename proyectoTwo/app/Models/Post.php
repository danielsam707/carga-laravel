<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    // es una relacion con la tabla users
    // Y lo escribo asi porque una publicacion pertenece a un unico usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
