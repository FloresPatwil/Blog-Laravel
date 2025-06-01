<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use PhpParser\Node\Expr\AssignOp\Pow;

// Route::get('/', function () { 
Route::get('/', [HomeController::class, 'index']); //NO DEBERIA D IR INDEX SI EL METODO FUERA INVOKE

/*
Opcion N3
*/
Route::resource('posts',PostController::class);
// Route::apiResource('posts',PostController::class);
/*
Opcion N2
/*
//GET, POST, PUT, PATCH, DELETE
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index'); // Ruta para listar los posts
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create'); // Ruta para mostrar el formulario de creación de un nuevo post
Route::post('/posts', [PostController::class, 'store'])
    ->name('posts.store'); // Ruta para almacenar un nuevo post
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show'); // Ruta para mostrar un post específico
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit'); // Ruta para mostrar el formulario de edición de un post específico
Route::put('/posts/{post}', [PostController::class, 'update'])
    ->name('posts.update'); // Ruta para actualizar un post específico
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy'); // Ruta para eliminar un post específico
/*

Opcion N1
Route::resource('posts', PostController::class); // Ruta para manejar los recursos de los posts
// ->only(['index', 'show']); // Ruta para manejar los recursos de los posts, solo index y show
// ->except(['create', 'edit']); // Ruta para manejar los recursos de los posts, excepto create y edit
// ->parameters(['articulos'=>'posts']); // Ruta para manejar los recursos de los posts, con un nombre específico])
// ->names('posts'); // Ruta para manejar los recursos de los posts, con un nombre específico
 */
// O SINO REEMPLAZAR POR

Route::get('prueba', function () {
    $post = Post::find(1);
    //return $post->created_at->format('Y-m-d'); // Formato de fecha y hora
    dd($post->is_active);
});

// Route::get('/prueba', function () {
//     // AGREGANDO UN NUEVO POST
//     // $post = new Post;
//     // $post->title = 'Mi post 5';
//     // $post->content = 'Contenido del post 5';
//     // $post->categoria = 'Categoría 5';
//     // $post->save();
//     // return $post;
    
//     // AGREEGANDO UN POST
//     // $post = new Post;
//     // $post->title = 'Mi post 4';
//     // $post->content = 'Contenido del post 4';
//     // $post->categoria = 'Categoría 4';
//     // $post->save();
//     // return $post;

//     // ACTUALIZAR UN POST campo categoria buscar por titulo
//     // $post = Post::where('title', 'Mi post 1')
//     //     ->first();
//     // $post->categoria = 'Desarrollo Web';
//     // $post->save();
//     // return $post;

//     // OBTENER TODOS LOS POSTS
//     // $posts = Post::all();
//     // return $posts;

//     // OBTENER-LISTAR TODOS LOS POSTS
//     // $posts = Post::where('id', '>=', 2)
//     //     ->orderBy('id', 'desc') // asc  , desc
//     //     ->select('id', 'title', 'content')
//     //     ->take(3)
//     //     ->get();
//     // return $posts;

//     // ELIMINAR UN POST
//     // $post = Post::find(1);
//     // $post->delete();
//     // return "Post eliminado correctamente.".$post;

// });


// Anteriormente se usaba Route::get('/posts/{post}', function ($post) {
//     return "Aqui se mostrara el POST {$post}.";
// });

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

// Route::get('/posts', function () {
//     return "Aqui se mostraran los POSTS.";
// });

// Route::get('/posts/post-1', function () {
//     return "Aqui se mostrara el POST 1.";
// });

// Route::get('/posts/post-2', function () {
//     return "Aqui se mostrara el POST 2.";
// });

// Route::get('/posts/post-3', function () {
//     return "Aqui se mostrara el POST 3.";
// });

// Route::get('/posts/{post}', function ($post)
// Route::get('/posts/{post}', function ($post) {
//     return 'Que honda';
// }); 