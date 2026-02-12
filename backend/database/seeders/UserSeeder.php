<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'fullname' => 'Alice Dupont',
            'age' => 21,
            'poids' => 55.5,
            'taille' => 1.65,
            'niveau' => 'Débutant',
            'sport_id' => 3,
            'email' => 'alice@test.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'fullname' => 'Mamadou Diop',
            'age' => 27,
            'poids' => 74.0,
            'taille' => 1.80,
            'niveau' => 'Confirmé',
            'sport_id' => 1,
            'email' => 'mamadou@test.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'fullname' => 'Sarah Martin',
            'age' => 32,
            'poids' => 62.0,
            'taille' => 1.70,
            'niveau' => 'Expert',
            'sport_id' => 4,
            'email' => 'sarah@test.com',
            'password' => Hash::make('password')
        ]);
    }
}
