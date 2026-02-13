@extends('layouts.app')
@section('title', 'update')
@section('content')

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <h1 class="text-2xl font-bold mb-6">Modifier / Supprimer produit</h1>

    <label for="category" class="block font-medium mb-1">Category :</label>

    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{old('category_id',  $product->category_id) == $category->id ? 'selected' : '' }} >
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <!--
    <div class="mb-4">
        <label for="category_id" class="block font-medium mb-1">Category ID</label>
        <input type="text" name="category_id" value="{{ old('category_id', $product->category_id) }}">
    </div>
    -->

    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Nom</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
    </div>

    <div class="mb-4">
        <label for="slug" class="block font-medium mb-1">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $product->slug) }}">
    </div>

    <div class="mb-4">
        <label for="description" class="block font-medium mb-1">Description</label>
        <input type="text" name="description" value="{{ old('description', $product->description) }}">
    </div>

    <div class="mb-4">
        <label for="price" class="block font-medium mb-1">Price</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}">
    </div>

    <div class="mb-4">
        <label for="stock" class="block font-medium mb-1">Stock</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">
    </div>

    <input type="checkbox" id = "active" name="active" value="1">
    <label for="active" class="block font-medium mb-1">Active</label>

    <br><button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Mettre à jour</button>
</form>


<form action="{{ route('products.destroy', $product) }}" method="POST"
      onsubmit="return confirm('Êtes-vous sûr ?')">
    @csrf
    @method('DELETE')

    <br>
    <button type="submit" class="bg-red-800 text-white px-4 py-2 rounded">
       Supprimer
    </button>
</form>
@endsection
