<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Phone;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Pust;
use App\Models\User;
use PhpParser\Node\Expr\AssignOp\Pow;

Route::get('/', [HomeController::class, 'index']); //NO DEBERIA D IR INDEX SI EL METODO FUERA INVOKE
Route::resource('posts',PostController::class);
Route::get('/post/{Framework}/{Categoria}',function ($Framework, $Categoria = null) {
    if ($Categoria) {
        return "Aqui se mostrara el POST del Framework {$Framework} de la Categoria {$Categoria}.";
    }
    return "Aqui se mostrara el POST del Framework {$Framework} y la Categoria {$Categoria} Que no tien categoria XD.";
});
Route::get('/post/{post}', function ($post) {
    return "Aqui se mostrara el POST {$post}.";
});
Route::get('/post/crate', function () {
    return "Aqui se mostrara el formulario.";
});
Route::get('prueba0', function () {
    $post = Post::find(1);
    //return $post->created_at->format('Y-m-d'); // Formato de fecha y hora
    dd($post->is_active);
});
Route::get('prueba',function(){
    // Crea un comentario para un Pust específico
    // Primero, asegúrate de que el Pust con ID 2 exista
    // y que tenga la relación con los comentarios configurada correctamente.
    // Puedes usar el método create para crear un nuevo comentario
    // y asociarlo con el Pust.
    $pust = Pust::find(2);
    $pust->comments()->create([
        'content' => 'Comentario de prueba',
    ]);
    return 'Comentario creado correctamente';
    /*
    $comment = Comment::find(1);
    return $comment->pust; // Obtiene todos los comentarios relacionados con el Pust
    */
    /*
    Comment::create([
        'pust_id' => 1,
        'content' => 'Comentario de prueba 2',
    ]);
    return 'Commentario 2 creado correctamente';
    */
});