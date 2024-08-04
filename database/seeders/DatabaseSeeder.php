<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        if (User::count() < 5) {
        User::factory(5)
        ->has(Post::factory(3))
        ->create();
        }

        // Update user roles
        $this->call(UpdateUserRolesSeeder::class);

       // User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
        //]);

        //$this->call(PostSeeder::class);
       
    }
}
