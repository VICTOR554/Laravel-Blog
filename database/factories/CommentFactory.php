<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Name of the factory's corresponding model.
     *
     * @var String
     */


    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->text($maxNbChars = 20),
            'user_id' => User::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id
        ];
    }
}
