<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'pust_id',
        'content',
    ];
    public function pust()
    {
        return $this->belongsTo(Pust::class);
        //Lee la clave local y la busca en la tabla principal
    }
}
