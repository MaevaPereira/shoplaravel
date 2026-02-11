<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return ('Hello Laravel!');
});


use App\Http\Controllers\PageController;


Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/app', [PageController::class, 'app'])
    ->name('app');


use App\Http\Controllers\ProductController;

//Route::get('/product/{id}', [ProductController::class, 'show'])
  //  ->name('product.show');

Route::get('/boutique', [ProductController::class, 'shop'])
    ->name('boutique');

//Route::get('/index', [ProductController::class, 'tab'])
  //  ->name('index');

use App\Http\Controllers\ResourceController;

Route::resource('products', ResourceController::class);
