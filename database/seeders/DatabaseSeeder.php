<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);

        User::factory(10)->create(); // Crear 10 usuarios de prueba
    }
    //Anteriormente se usaba este metodo para crear los posts, pero ahora se usa el PostSeeder
    // public function run(): void {
    //     Post::factory(100)->create(); // Crear 100 posts de prueba
    //     $this->call(UserSeeder::class); // Llamar al seeder de usuarios
    // }
}
