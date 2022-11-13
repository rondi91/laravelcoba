<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();

        // menjalankan Post factory
        Post::factory(10)->create();

        //menjalankan Category
         
        Category::create([
            'name' =>'Personal',
            'slug'=>'personal'
        ]);
        Category::create([
            'name' =>'Web Progaming',
            'slug'=>'web-progaming'
        ]);
        Category::create([
            'name' =>'Sex',
            'slug'=>'sex'
        ]);
        
    }
}
