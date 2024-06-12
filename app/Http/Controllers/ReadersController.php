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

    /*public function add($title)
    {
        $data = ReadersController::find($title);

        return view('userlibrary', compact('data','title'));
    }*/

    public function shiftdata()
    {
        $books = Books::get();
        dd($books);
    }
}
