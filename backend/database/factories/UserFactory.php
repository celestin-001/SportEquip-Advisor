<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 50),
            'poids' => $this->faker->randomFloat(1, 50, 100),
            'taille' => $this->faker->randomFloat(2, 1.50, 2.00),
            'niveau' => 'Débutant',
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
        ];
    }
}
