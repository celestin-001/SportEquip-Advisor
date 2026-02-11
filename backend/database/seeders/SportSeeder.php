<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;


class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sports = [
            ['nom' => 'Football'],
            ['nom' => 'Basketball'],
            ['nom' => 'Running'],
            ['nom' => 'Fitness'],
            ['nom' => 'Natation'],
        ];

        Sport::insert($sports);
    }

}
