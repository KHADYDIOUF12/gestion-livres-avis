@extends('layouts.app')

@section('content')
<form action="{{ route('books.addReview', $book->id) }}" method="POST" class="space-y-6">
    

    <!-- Champ Nom de l'utilisateur -->
    <div>
        <label for="user_name" class="block mb-2 text-gray-700 font-medium">Nom de l'utilisateur :</label>
        <input type="text" name="user_name" id="user_name" class="w-full border border-gray-300 rounded-lg p-3" required>
    </div>

    <!-- Note -->
    <div>
        <label for="rating" class="block mb-2 text-gray-700 font-medium">Note :</label>
        <select name="rating" id="rating" class="w-full border border-gray-300 rounded-lg p-2" required>
            <option value="">-- Sélectionnez une note --</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>

    <!-- Commentaire -->
    <div>
        <label for="comment" class="block mb-2 text-gray-700 font-medium">Commentaire :</label>
        <textarea name="comment" id="comment" rows="4" class="w-full border border-gray-300 rounded-lg p-3" required></textarea>
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-lg">
            💬 Ajouter le commentaire
        </button>
    </div>
</form>
@endsection