@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fce4ec; /* 🌸 rose pastel */
    }

    .section-title {
        color: #880e4f;
    }

    .card-category {
        background-color: #fff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        height: 100%;
    }

    .card-category:hover {
        transform: translateY(-8px);
    }

    .category-icon {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    .testimonials {
        background-color: #ffffff;
        border-radius: 15px;
        padding: 2rem;
        margin-top: 3rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .counter {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        margin-top: 2rem;
    }
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold section-title">Bienvenue à votre Bibliothèque 🌸</h1>
        <p class="lead">Parcourez notre collection de livres inspirants et enrichissants.</p>
        <a href="{{ route('books.index') }}" class="btn btn-dark btn-lg mt-3">Voir tous les livres</a>
    </div>

    <!-- Nouveau style : 4 cartes sur une seule ligne sur desktop -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center">
        <div class="col">
            <div class="card card-category p-4">
                <div class="category-icon text-primary">📖</div>
                <h4 class="card-title">Romans</h4>
                <p class="card-text">Des histoires captivantes pour s’évader.</p>
                <a href="#" class="btn btn-outline-primary btn-sm">Voir plus</a>
            </div>
        </div>

        <div class="col">
            <div class="card card-category p-4">
                <div class="category-icon text-success">🔬</div>
                <h4 class="card-title">Sciences</h4>
                <p class="card-text">Explorez la physique, la biologie et plus encore.</p>
                <a href="#" class="btn btn-outline-success btn-sm">Voir plus</a>
            </div>
        </div>

        <div class="col">
            <div class="card card-category p-4">
                <div class="category-icon text-warning">🚀</div>
                <h4 class="card-title">Développement Personnel</h4>
                <p class="card-text">Inspiration et motivation au quotidien.</p>
                <a href="#" class="btn btn-outline-warning btn-sm">Voir plus</a>
            </div>
        </div>

        <div class="col">
            <div class="card card-category p-4">
                <div class="category-icon text-danger">📜</div>
                <h4 class="card-title">Histoire</h4>
                <p class="card-text">Plongez dans le passé et ses leçons.</p>
                <a href="#" class="btn btn-outline-danger btn-sm">Voir plus</a>
            </div>
        </div>
    </div>

    <!-- Témoignages (facultatif) -->
    <div class="testimonials mt-5">
        <h2 class="text-center mb-4">💬 Témoignages</h2>
        <div class="row justify-content-center">
            <div class="col-md-5 mb-3">
                <div class="card card-category p-3">
                    <p>“J’aime vraiment cette nouvelle version, elle est plus jolie !”</p>
                    <div class="text-end"><strong>- Khady</strong></div>
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <div class="card card-category p-3">
                    <p>“Design très frais et agréable, bravo !”</p>
                    <div class="text-end"><strong>- Étudiant anonyme</strong></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compteurs -->
    <div class="row text-center mt-5">
        <div class="col-md-6">
            <div class="counter">
                <h2 class="text-primary">📚 538</h2>
                <p>Livres disponibles</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="counter">
                <h2 class="text-success">👤 132</h2>
                <p>Utilisateurs actifs</p>
            </div>
        </div>
    </div>
</div>
@endsection
