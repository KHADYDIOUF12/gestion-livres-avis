<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10); // Pagination
        return view('books.index', compact('books'));
    }
     /**
     * Afficher le formulaire d'ajout d'avis.
     */
    public function reviewForm($id)
    {
        $book = Book::findOrFail($id);
        return view('books.reviewForm', compact('book'));
    }

    /**
     * Enregistrer l'avis dans la base de données.
     */
    public function addReview(Request $request, $id)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);
    
        // Rechercher l'utilisateur par son nom
        $user = User::where('name', $request->user_name)->first();
    
        if (!$user) {
            return redirect()->back()->withErrors(['user_name' => 'Utilisateur non trouvé.']);
        }
    
        // Créer l'avis
        Review::create([
            'book_id' => $id,
            'user_id' => $user->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
    
        return redirect()->route('books.reviewForm', $id)->with('success', 'Avis ajouté avec succès !');
    }
    

}
