<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\UserLibrary;

class ReadersController extends Controller
{
    public function index()
    {
        $books = Books::all(); // Assuming Book is your model
        return view('userbook', compact('books'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $books = books::where('title','like', '%' .$search. '%')->orWhere('author','like', '%' .$search. '%')->orWhere('genre','like', '%' .$search. '%')->get();

        return view('userbook', compact('books'));
    }
}
