<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id = 10)
    {

        $books = Book::paginate($id);
        return view('home', compact('books'));
    }
}
