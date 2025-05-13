<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

abstract class Controller 
{
    public function show($id)
{
    $book = Book::with('reviews.user')->findOrFail($id);
    return view('books.show', compact('book'));
}

}
