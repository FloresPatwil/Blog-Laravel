<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pust extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'title',
    ];
    // UNO A MUCHOS
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //MUCHOS A MUCHOS
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
