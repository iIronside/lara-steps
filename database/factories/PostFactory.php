<?php

namespace Database\Factories;


use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'content' => $this->faker->text,
            'image' => $this->faker->imageUrl,
            'likes' =>  random_int(0, 1000),
            'is_published' => random_int(0,1),
            'categories_id' => Categorie::all()->random()->id,
        ];
    }
}
