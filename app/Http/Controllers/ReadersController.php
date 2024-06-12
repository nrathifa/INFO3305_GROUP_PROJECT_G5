<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class ReadersController extends Controller
{
    public function index()
    {
        $books = Books::all(); // Assuming Book is your model
        return view('mainpage', compact('books'));
    }

    /*public function add($title)
    {
        $data = ReadersController::find($title);

        return view('userlibrary', compact('data','title'));
    }*/
}
