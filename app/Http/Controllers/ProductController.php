<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {

        $shop = [
            'name' => 'Poké Shop',
            'stock' => 3,
            'etat' => true
        ];


        return view('boutique', [
            'shop' => $shop,
        ]);
    }

    public function tab()
    {
        $products = [
            ['id' => 1, 'name' => 'Poké ball', 'price' => 200],
            ['id' => 2, 'name' => 'Super ball', 'price' => 600],
            ['id' => 3, 'name' => 'Ultra ball', 'price' => 800],
            ['id' => 4, 'name' => 'Luxe ball', 'price' => 3000],
            ['id' => 5, 'name' => 'Master ball', 'price' => 1000000000],
        ];

        return view('products/index', [
            'products' => $products,
        ]);
    }
}
