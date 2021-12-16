<?php

namespace Database\Seeders;
use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l = new Like;
        $l->user_id = 1;
        $l->post_id = 1;
        $l->save();

       $comments = Like::factory()->count(5)->create();
    }
}
