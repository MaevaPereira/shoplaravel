<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
        'name' =>'Ash',
        'email'=>'ash@kanto.com',
        'password'=>'pikachu',
        'created_at' => now(),
        'updated_at' => now(),
        ],
        [
            'name' =>'Giovanni',
            'email'=>'giovanni@teamrocket.com',
            'password'=>'leaderR0cket',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}

