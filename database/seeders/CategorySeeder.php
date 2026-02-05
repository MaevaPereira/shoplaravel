<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //utiliser DB dans ce fichier
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([ //enregistre dans la BDD
            [
                'name' => 'Poké Balls',
                'slug' => 'poke-balls',
                'description' => 'Découvrez nos différentes variétés de poké balls',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baies',
                'slug' => 'baies',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Capsule Technique',
                'slug' => 'capsule-technique',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Objets Rares',
                'slug' => 'objets-rares',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fossil Pokémon',
                'slug' => 'fossil',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
