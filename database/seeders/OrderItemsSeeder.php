<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id'=> 1,
                'product_id'=> 1,
                'quantity'=> 2,
                'price' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id'=> 1,
                'product_id'=> 9,
                'quantity'=> 2,
                'price' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id'=> 2,
                'product_id'=> 3,
                'quantity'=> 3,
                'price' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
