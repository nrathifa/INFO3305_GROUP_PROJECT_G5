<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkGenre()
    {
        $genres = ['Action', 'Comedy', 'Drama', 'Sci-Fi', 'Adventure', 'Comedy', 'Slice of Life', 'Mystery', 'Historical', 'Supernatural', 'Crime', 'Romance'];
        return view('genre', compact('genres')); //VIEW NAME
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    //$books = Book::where('genre', $genre)->get();
    //return view('genre.show', compact('books'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
