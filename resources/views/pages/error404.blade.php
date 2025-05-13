{{-- resources/views/errors/404.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container text-center py-5" style="background-color: #ffe6f0; border-radius: 10px;">
    <h1 class="display-1 text-danger fw-bold">404</h1>
    <h2 class="mb-4">😢 Oups ! Page non trouvée</h2>
    <p class="lead">La page que vous recherchez n'existe pas ou a été déplacée.</p>

    <a href="{{ url('/books') }}" class="btn btn-primary mt-4">
        Retour à la liste des livres
    </a>
</div>
@endsection
