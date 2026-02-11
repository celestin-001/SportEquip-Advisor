<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'nom' => 'Chaussures Running Débutant',
                'prix' => 49.99,
                'image' => 'running_debutant.jpg',
                'sport_id' => 3,
                'disponibilite' => 12
            ],
            [
                'nom' => 'Chaussures Running Expert',
                'prix' => 129.99,
                'image' => 'running_expert.jpg',
                'sport_id' => 3,
                'disponibilite' => 3
            ],
            [
                'nom' => 'Ballon de Football',
                'prix' => 19.99,
                'image' => 'football_ballon.jpg',
                'sport_id' => 1,
                'disponibilite' => 20,
            ],
            [
                'nom' => 'Chaussures Football Pro',
                'prix' => 89.99,
                'image' => 'football_chaussures.jpg',
                'sport_id' => 1,
                'disponibilite' => 5
            ],
            [
                'nom' => 'Tapis de Fitness',
                'prix' => 29.99,
                'image' => 'fitness_tapis.jpg',
                'sport_id' => 4,
                'disponibilite' => 10
            ],
            [
                'nom' => 'Haltères réglables',
                'prix' => 59.99,
                'image' => 'fitness_haltere.jpg',
                'sport_id' => 4,
                'disponibilite' => 2
            ],
        ]);
    }
}
