<?php

namespace App\Http\Controllers;

use App\Models\author as ModelsAuthor;
use Illuminate\Http\Request;

class author extends Controller
{
    public function show()
    {
        $authors = ModelsAuthor::paginate(10);
        return view('famousAuthor', compact('authors'));
    }
}
