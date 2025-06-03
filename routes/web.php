<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Phone;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    // User::create([
    //     'name' => 'Pwiff Gamer',
    //     'email' => 'pwiff@example.com',
    //     'password' => bcrypt('1234'),
    // ]);
    // Phone::create([
    //     'number' => '123456789',
    //     'user_id' => 1, // Asegúrate de que el usuario con ID 1 exista
    // ]);
    $user = User::where('id',1)//User::find(1);
        ->with('phone') // Carga la relación 'phone' para el usuario
        ->first(); // Obtiene el primer usuario con ID 1
    return $user; // Accede al número de teléfono del usuario
});