<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Categorie::factory(10)->create();
        Tag::factory(100)->create();
        Post::factory(30)->create();
//        // \App\Models\User::factory(10)->create();
    }
}
