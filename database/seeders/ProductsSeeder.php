<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Poké Ball',
                'slug' => 'poke-ball',
                'description' => 'un objet pour capturer les Pokémon.',
                'price' => 100,
                'stock' => 999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'Luxe Ball',
                'slug' => 'luxe-ball',
                'description' => 'Une Poké Ball qui permet de gagner rapidement l\'amitié d\'un Pokémon sauvage attrapé.',
                'price' => 3000,
                'stock' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 2,
                'name' => 'Baie Oran ',
                'slug' => 'baie-oran',
                'description' => 'Une Baie qui restaure 10 PV lorsqu\'elle est tenue par un Pokémon.',
                'price' => 80,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Baie Framby',
                'slug' => 'baie-framby',
                'description' => 'Il subsiste un goût épicé dans les granules rouges qui entourent cette Baie. Leur centre a un goût sec.',
                'price' => 120,
                'stock' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'CT44 Repos',
                'slug' => 'ct-repos',
                'description' => 'Le lanceur regagne ses PV mais se retrouve plongé dans un état de somnolence.',
                'price' => 500,
                'stock' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'CT25 Fatal-Foudre',
                'slug' => 'ct-fatal-foudre',
                'description' => 'La foudre tombe violemment sur la cible. Peut aussi la paralyser.',
                'price' => 500,
                'stock' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Super Potion',
                'slug' => 'super-potion',
                'description' => 'Une pommade qui soigne les blessures. Restaure 100 PV d\'un pokémon.',
                'price' => 700,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'category_id' => 4,
                'name' => 'Total Soin',
                'slug' => 'total-soin',
                'description' => 'Une pommade qui soigne toutes les altérations de statut d\'un Pokémon.',
                'price' => 50,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Fossile Dôme',
                'slug' => 'fossile-dôme',
                'description' => 'Le fossile d\'un ancien Pokémon aquatique. On dirait un morceau de carapace.',
                'price' => 2000,
                'stock' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Fossile Plaque',
                'slug' => 'fossile-plaque',
                'description' => 'Le fossile d\'un ancien Pokémon aquatique. Il semble que ce soit une partie de son dos.',
                'price' => 2000,
                'stock' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
