<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
            'prix' => $this->faker->randomFloat(2, 10, 200),
            'image' => $this->faker->imageUrl(200, 200, 'sports', true),
            'sport_id' => Sport::factory(), // crée un sport associé automatiquement
            'disponibilite' => $this->faker->boolean(80), // 80% disponible
        ];
    }
}
