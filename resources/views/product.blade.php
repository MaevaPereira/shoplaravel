@extends('layouts.app')
@section('title', 'produit')
@section('content')

    <h1 class="text-3xl font-bold mb-4">Produit ID: {{$product->id }}</h1>

    <ul><br>
            <li><br> <strong>{{ $product->name }}</strong> :  <em>{{ $product->description }}</em>
                <br>Prix: {{ $product->price }} ₽ <br>En stock: {{ $product->stock }}</li>
    </ul>

@endsection
