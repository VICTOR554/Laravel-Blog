<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Name of the factory's corresponding model.
     *
     * @var String
     */


    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->firstName(),
            'description' => $this->faker->text($maxNbChars = 20),
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
