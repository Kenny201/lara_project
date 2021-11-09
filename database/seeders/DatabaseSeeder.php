<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   User::truncate();
        Post::truncate();
        Category::truncate();
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
        ]);
    }
}