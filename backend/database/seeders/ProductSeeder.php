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
                'nom' => 'chaussure de football',
                'prix' => 49.99,
                'image' => 'chaussure_football_1.jpeg',
                'sport_id' => 3,
                'disponibilite' => 12
            ],
            [
                'nom' => 'chaussure fitness',
                'prix' => 129.99,
                'image' => 'chaussures_fitness1.jpeg',
                'sport_id' => 3,
                'disponibilite' => 3
            ],
            [
                'nom' => 'gants de foot.jpeg',
                'prix' => 19.99,
                'image' => 'gants_de_foot.jpeg',
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
            [
                'nom' => 'disque de musculation',
                'prix' => 39.99,
                'image' => 'disque_musculation.jpeg',
                'sport_id' => 4,
                'disponibilite' => 2
            ],
            [
                'nom' => 'ballon',
                'prix' => 9.99,
                'image' => 'ballon.jpg',
                'sport_id' => 4,
                'disponibilite' => 2
            ],
            [
                'nom' => 'Chaussure foot',
                'prix' => 23.99,
                'image' => 'chaussures_football.jpeg',
                'sport_id' => 1,
                'disponibilite' => 2
            ],
            [
                'nom' => 'maillot de bain femme',
                'prix' => 3.99,
                'image' => 'maillot_de_bain_femme.jpeg',
                'sport_id' => 4,
                'disponibilite' => 2
            ],
            [
                'nom' => 'maillot de foot',
                'prix' => 29.99,
                'image' => 'maillot_foot.jpeg',
                'sport_id' => 1,
                'disponibilite' => 2
            ],
            [
                'nom' => 'maillot de bain homme',
                'prix' => 30.89,
                'image' => 'maillot_de_bain_homme.jpeg',
                'sport_id' => 5,
                'disponibilite' => 2
            ],
            [
                'nom' => 'bonnet de natation',
                'prix' => 23.99,
                'image' => 'bonnet_natation.jpeg',
                'sport_id' => 5,
                'disponibilite' => 2
            ],
            [
                'nom' => 'maillot basket',
                'prix' => 19.99,
                'image' => 'maillot_basket.jpeg',
                'sport_id' => 2,
                'disponibilite' => 2
            ],
            [
                'nom' => 'chaussure sport',
                'prix' => 59.99,
                'image' => '71MP3f70aZL._AC_UY900_.jp',
                'sport_id' => 2,
                'disponibilite' => 2
            ],
            [
                'nom' => 'chaussures basket',
                'prix' => 15.19,
                'image' => 'chaussures_basket.jpeg',
                'sport_id' => 2,
                'disponibilite' => 2
            ],
        ]);
    }
}
