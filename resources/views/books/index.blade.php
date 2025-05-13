@extends('layouts.app')

@section('content')
    <h1>📚 Liste des Livres</h1>

    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> de {{ $book->author }}
                — <a href="{{ url('/books/'.$book->id) }}">Voir les détails</a>
            </li>
        @endforeach
    </ul>
@endsection
<!-- resources/views/books/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Liste des Livres</h1>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">{{ $book->title }}</h5>
                        <p class="card-text text-secondary mb-2">Auteur : {{ $book->author }}</p>
                        <p class="card-text text-muted small">{{ Str::limit($book->description, 80) }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary mb-2">Voir les détails</a>

                      
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $books->links() }}
    </div>
</div>
@endsection
