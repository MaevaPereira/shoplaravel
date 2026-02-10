@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>

    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">Description</label>
            <input type="text" name="description" id="description"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="price" class="block font-medium mb-1">Prix</label>
            <input type="text" name="price" id="price"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock</label>
            <input type="number" name="stock" id="stock"
                   value="{{ old('name') }}"
                   class="w-full border rounded px-3 py-2"
                   required>
        </div>

        <div class="mb-5">
            <input type="checkbox" id="active" name="active" />
            <label for="active">Active</label>
        </div>

        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">
            Créer le produit
        </button>
    </form>
@endsection
