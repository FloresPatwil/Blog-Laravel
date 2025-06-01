<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'content', 'categoria'];
    // protected $table = 'posts'; // Nombre de la tabla en la base de datos
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime', // Cast to datetime
            'is_active' => 'boolean', // Cast to boolean
        ];
    }
    // protected function title(): Attribute  // Setear el campo title a mayusculas
    // {
    //     return Attribute::make(
    //         set: function ($value){
    //             return strtolower($value);
    //         },
    //         get: function ($value) {
    //             return ucfirst($value);
    //         }
    //     );
    // } 
    public function getRouteKeyName()
    {   // Model/Post
        return 'slug'; // Cambia el campo por el que se buscará el modelo en las rutas
    }
}
