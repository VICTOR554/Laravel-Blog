<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post;
        $p->title = "The Daily Bugle";
        $p->description =  "A black meteorite";
        $p->user_id = 1;
        $p->save();

        $posts = Post::factory()->count(5)->create();
    }
}
