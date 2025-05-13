<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:255',
        ]);

        Review::create($request->all());

        return redirect()->route('books.show', $request->book_id);
    }
    

    public function affiche()
    {
        $reviews = Review::with(['user', 'book'])->latest()->paginate(10); // chargement des relations
        return view('reviews.affiche', compact('reviews'));
    }
    
}
