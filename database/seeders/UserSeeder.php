<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Pwiff Stuff';
        $user->email = 'pwiff@unsa.com';
        $user->password = bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name = 'Mario Rift';
        $user->email = 'mario@ucv.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
