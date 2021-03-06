<?php

namespace Database\Seeders;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment;
        $c->comment = "Monsters came out of the meteor";
        $c->user_id = 1;
        $c->post_id = 1;
        $c->save();

       $comments = Comment::factory()->count(5)->create();
    }
}
