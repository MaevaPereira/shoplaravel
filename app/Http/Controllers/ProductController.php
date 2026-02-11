<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function shop()
    {
        $shop = [
            'name' => 'Poké Shop',
            'stock' => 151,
            'etat' => true
        ];

        return view('boutique', [
            'shop' => $shop,
        ]);
    }

}
