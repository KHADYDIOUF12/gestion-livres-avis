<!-- resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-12 px-4 max-w-4xl">
        <h1 class="text-3xl font-bold mb-10 text-center text-blue-700 tracking-wide">📖 Détails du Livre</h1>

        <div class="bg-white shadow-xl rounded-2xl p-6 mb-12 border border-gray-200 transition duration-300 hover:shadow-2xl">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">{{ $book->title }}</h2>
            <p class="text-gray-800 mb-2">✍️ <span class="font-medium">Auteur :</span> {{ $book->author }}</p>
            <p class="text-gray-800 mb-2">📅 <span class="font-medium">Date de publication :</span> {{ $book->published_at }}</p>
            <div class="mt-6 text-gray-700 leading-relaxed">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Résumé :</h3>
                <p>{{ $book->description }}</p>
            </div>
        </div>

        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-6 text-green-700 border-b pb-2 border-green-300">💬 Commentaires</h3>
            @forelse ($book->reviews as $review)
                <div class="bg-gray-100 p-4 mb-4 rounded-xl shadow-sm border-l-4 border-green-400">
                    <p class="font-semibold text-gray-900 mb-1">
                        👤 {{ $review->user->name }} 
                        <span class="text-green-600 ml-2">⭐ {{ $review->rating }}/5</span>
                    </p>
                    <p class="text-gray-700">{{ $review->comment }}</p>
                </div>
            @empty
                <p class="text-gray-500 italic">Aucun commentaire pour ce livre pour le moment.</p>
            @endforelse
        </div>

        <div class="mb-8 text-right">
            <a href="{{ route('books.reviewForm', $book->id) }}" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                📝 Donner un avis
            </a>
            
        </div>
        
    </div>
@endsection
