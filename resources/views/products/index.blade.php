@extends('layouts.app')
@section('title', 'index')
@section('content')

<h1 class="text-3xl font-bold mb-4">Produits</h1>

{{--<img src=https://archives.bulbagarden.net/media/upload/thumb/3/3e/Pok%C3%A9_Balls.png/250px-Pok%C3%A9_Balls.png>--}}

<h2><br> <strong>Notre séléction de poké balls, baies, CT, objets et fossils :</strong> </h2>

@forelse($products as $product)
<p> <br>{{$product->category_id }} -  <strong>{{ $product->name }}</strong>  :  {{ $product->description }}
    <br>Prix: {{ $product->price }} ₽ <br>En stock: {{ $product->stock }}</p>
@empty
<p>Aucun produit trouvé.</p>
@endforelse


@endsection
