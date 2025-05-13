<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>T-Biblio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">T-Biblio</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.index') ? 'active' : '' }}" href="{{ route('books.index') }}">Liste des livres</a>
                </li>

                <!-- Lien vers les avis -->
               
               
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">À propos</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
