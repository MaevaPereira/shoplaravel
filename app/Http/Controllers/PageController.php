<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*
    public function home()
    {
        return view('home');
        //return view('hello');
        //return redirect()->route('products.show', ['id' => 777]);
    }
*/

    public function about()
    {
        return view('layouts/about');
    }

    public function app()
    {
        return view('layouts/app');
    }
}
