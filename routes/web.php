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


use App\Http\Controllers\ShopController;

//Route::get('/product/{id}', [ShopController::class, 'show'])
  //  ->name('product.show');

Route::get('/boutique', [ShopController::class, 'shop'])
    ->name('boutique');

//Route::get('/index', [ShopController::class, 'tab'])
  //  ->name('index');

use App\Http\Controllers\CategoryController;
Route::get('/category/{id}', [CategoryController::class, 'show'])
->name('category');


use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

