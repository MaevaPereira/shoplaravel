<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $products = Product::all();
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'slug'=> $request->slug,
        'description'=> $request->description,
        'price'=> $request->price,
        'stock'=> $request->stock,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Produit créé avec succès !');
          //->with('error', 'Une erreur est survenue.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('product',[
            'id'=> $id,
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([ //On met à jour les informations du Post
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug'=> $request->slug,
            'description'=> $request->description,
            'price'=> $request->price,
            'stock'=> $request->stock,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Produit modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete(); //On supprime les informations

        return redirect()->route('products.index')
            ->with('success', 'Produit supprimé avec succès !');
    }
}
