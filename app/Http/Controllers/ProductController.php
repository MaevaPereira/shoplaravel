<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product',[
        'id'=> $id,
        'product' => $product,
        ]);
    }

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

    public function tab()
    {
        $products = Product::all();

        return view('products/index', compact('products'));
    }
}
