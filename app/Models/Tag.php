<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
    ];

    // Muchos a muchos
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // Muchos a muchos con Pust
    public function pusts()
    {
        return $this->belongsToMany(Pust::class);
    }
}
