<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return ('Hello Laravel!');
});


use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/app', [PageController::class, 'app'])
    ->name('app');


use App\Http\Controllers\ProductController;

Route::get('/boutique', [ProductController::class, 'show'])
    ->name('boutique');

Route::get('/index', [ProductController::class, 'tab'])
    ->name('index');
