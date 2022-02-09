<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorieFactory extends Factory
{
    protected $model = Categorie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' =>  Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
