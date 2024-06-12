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

    public function add($title)
    {
        $data = ReadersController::find($title);

        foreach ($books as $key => $value) {
            UserLibrary::create([
                'title'=>$value->title,
                'author'=>$value->author,
                'genre'=>$value->genre,
                'date_published'=>$value->date_published,
            ]);

            return redirect('userlibrary');
        }

        //return view('userlibrary', compact('data','title'));
    }

    /*public function shiftdata()
    {
        $books = Books::get();

        foreach ($books as $key => $value) {
            UserLibrary::create([
                'title'=>$value->title,
                'author'=>$value->author,
                'genre'=>$value->genre,
                'date_published'=>$value->date_published,
            ]);

            return 'Shift successfully';
        }
    }*/

    public function search(Request $request)
    {
        $search = $request->search;
        $books = books::where('title','like', '%' .$search. '%')->orWhere('author','like', '%' .$search. '%')->orWhere('genre','like', '%' .$search. '%')->get();

        return view('userbook', compact('books'));
    }
}
