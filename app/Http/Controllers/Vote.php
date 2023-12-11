<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;
use App\Models\Book;
use App\Models\Rating;

class Vote extends Controller
{
    public function show()
    {
        $authors = Author::all();
        $books = Book::all();

        return view("votes", compact('authors', 'books'));
    }

    public function input(Request $request)
    {
        Rating::create(
            [
                'rating_value' => $request->rating,
                'book_id' => $request->book_name
            ]
        );
    }
}
