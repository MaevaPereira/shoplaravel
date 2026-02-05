@extends('layouts.app')
@section('title', 'boutique')
@section('content')
<h1 class="text-3xl font-bold mb-4">Bienvenue sur {{ $shop['name'] }}</h1>

<img src="https://www.pokebip.com/pokedex-images/300/213.png?v=za-2.0](https://www.pokebip.com/pokedex-images/300/213.png?v=za-2.0)">
<p>Découvrez nos poké balls fabriquées depuis l'usine "Fargas & Caratroc" d'Écorcia !</p>


<p>Boutique:
    <!-- condition si boutique ouverte -->
    @if($shop['etat'] == 'true')
    Ouverte
    @else
    Fermée
    @endif
</p>

<p>stock : {{ $shop['stock'] }}</p>

@endsection