<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Post::class, 50)
    // classico modello da callback
          -> make()
          -> each(function($post) {
        $category = Category::inRandomOrder() -> first();
        $post -> category() -> associate($category);
        $post -> save();
      });
    }
}
