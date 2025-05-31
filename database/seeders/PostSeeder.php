<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        POST::factory(100)
            ->create(); // Crear 100 posts de prueba

        // Post::create([
        //     'title' => 'Segundo Post',
        //     'content' => 'Contenido del segundo post',
        //     'categoria' => 'Categoria 2',
        //     'published_at' => now(),
        //     'is_active' => false,
        // ]);
        // DEBERIA SER ASI 
        // $post = new Post();
        // $post->title = 'Segundo Post';
        // $post->content = 'Contenido del segundo post';
        // $post->categoria = 'Categoria 2';
        // $post->published_at = now();
        // $post->is_active = false;
        // $post->save();
    }
}
