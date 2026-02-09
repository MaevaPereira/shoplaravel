@extends('layouts.app')
@section('title', 'produits')
@section('content')

<h1 class="text-3xl font-bold mb-4">Produits</h1>

<img src=https://archives.bulbagarden.net/media/upload/thumb/3/3e/Pok%C3%A9_Balls.png/250px-Pok%C3%A9_Balls.png>

<h2><br> boucle foreach</h2>
<ul><br>

    @foreach($products as $product)
        <li><br>{{$product->id }} - <strong>{{ $product->name }}</strong> :  <em>{{ $product->description }}</em>
        <br>Prix: {{ $product->price }} ₽ <br>En stock: {{ $product->stock }}</li>
    @endforeach
</ul>


<h2><br> boucle forelse </h2>
<br>
@forelse($products as $product)
<p> <br>{{$product->id }} -  <strong>{{ $product->name }}</strong>  :  {{ $product->description }}
    <br>Prix: {{ $product->price }} ₽ <br>En stock: {{ $product->stock }}</p>
@empty
<p>Aucun produit trouvé.</p>
@endforelse


@endsection
