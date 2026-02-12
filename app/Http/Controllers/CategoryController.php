<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show(string $id)
    {
        $category = Category::with('products')->findOrFail($id);

        return view('category',[
            'category' => $category,
        ]);
    }
}
