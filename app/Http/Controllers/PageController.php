<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //return view('boutique');
        return redirect()->route('products.show', ['id' => 777]);
    }

    public function about()
    {
        return 'description de la boutique';
    }
}
