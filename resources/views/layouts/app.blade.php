<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Poké Shop')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

    <header class="bg-red-600 text-white p-4">
        <nav class="container mx-auto">

            <a href="{{ route('boutique') }}" class="font-bold text-xl">Poké Shop</a>

            <a href="{{ route('products.index') }}" class="ml-4">Produits</a>

            <a href="{{ route('about') }}" class="ml-4">À propos</a>
        </nav>
    </header>

    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Poké Shop - Tous droits réservés - Attrapez-les tous !
        </div>
    </footer>
</body>

</html>
