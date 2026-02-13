<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get(); // 2 requêtes seulement
        //$products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $categories = Category::all();
        return view('products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'active' => 'required|boolean',
        ]);

        // Si on arrive ici, les données sont valides
        Product::create($validated);
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
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
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
