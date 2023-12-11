<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;
use App\Models\Book;

class Vote extends Controller
{
    public function show()
    {
        $authors = Author::all();
        $books = Book::all();

        return view("votes", compact('authors', 'books'));
    }
}
