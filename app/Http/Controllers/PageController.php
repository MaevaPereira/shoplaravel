<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return redirect()->route('products.show', ['id' => 666]);
    }

    public function about()
    {
        return 'description de la boutique';
    }
}
