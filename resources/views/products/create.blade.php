@extends('layouts.app')
@section('title', 'create')
@section('content')

    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <!--Afficher toutes les erreurs-->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <strong>Oups !</strong> Il y a des erreurs dans le formulaire :
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!--Afficher l'erreur d'un champ spécifique-->

  <label for="category" class="block font-medium mb-1">Category :</label>

        <select name="category_id" id="category_id">
        @foreach($categories as $category)
                <option value="{{ $category->name }}" > {{ $category->name }}</option>
        @endforeach
        </select>

        <div class="mb-4">
            <br>
            <label for="category_id" class="block font-medium mb-1">Category ID</label>
            <input type="number" name="category_id" id="category_id"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('category_id') border-red-500 @enderror
            @error('category_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('name') border-red-500 @enderror
            @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="slug" class="block font-medium mb-1">Slug</label>
            <input type="text" name="slug" id="slug"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('slug') border-red-500 @enderror
            @error('slug')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <input type="text" name="description" id="description"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('description') border-red-500 @enderror
            @error('description')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix</label>
            <input type="number" step= "0.01" name="price" id="price"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('price') border-red-500 @enderror
            @error('price')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="number" name="stock" id="stock"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
            @error('stock') border-red-500 @enderror
            @error('stock')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <input type="checkbox" id = "active" name="active" value="1"
                {{ old('active', $product->active ?? false) ? 'checked' : '' }}>
            <label for="active" class="block font-medium mb-1">Active</label>
        </div>

        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>
@endsection
