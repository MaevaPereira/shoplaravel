@extends('layouts.app')
@section('title', 'produits')
@section('content')

<h1 class="text-3xl font-bold mb-4">Produits</h1>

<img src=https://archives.bulbagarden.net/media/upload/thumb/3/3e/Pok%C3%A9_Balls.png/250px-Pok%C3%A9_Balls.png>

<h2><br> boucle foreach</h2>

<ul><br>
    @foreach($products as $product)
    <li>{{ $product['id'] }} - {{ $product['name'] }} - {{ $product['price'] }} ₽</li>
    @endforeach
</ul>


<h2><br> boucle forelse </h2>
<br>
@forelse($products as $product)
<p> {{ $product['id'] }} - {{ $product['name'] }} - {{ $product['price'] }} ₽</p>
@empty
<p>Aucun produit trouvé.</p>
@endforelse


@endsection