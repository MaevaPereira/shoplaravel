@extends('layouts.app')
@section('title', 'Category')
@section('content')

    <h1 class="text-3xl font-bold mb-4">{{ $category->name }}  ({{$category->id }}. {{$category->slug }})</h1>

    <ul><br>
        <li><br> <em>{{ $category->description }}</em></li>

        <li><br>
            @foreach ($category->products as $product)
            <br>- <strong>{{$product->name}}</strong>
            </li>

        @endforeach

    </ul>

@endsection
