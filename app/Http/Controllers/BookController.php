<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all(); // Assuming Book is your model
        return view('book', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('add-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'date_published' => 'required|date',
        ]);

        Books::create($validated);

        return redirect()->route('book')->with('success', 'Book added successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($title)
    {
        $book = Books::where('title', $title)->first();
        if (!$book) {
            return redirect()->route('book')->with('error', 'Book not found.');
        }

        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $title)
    {
        $book = Books::where('title', $title)->first();
    if (!$book) {
        return redirect()->route('book')->with('error', 'Book not found.');
    }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'date_published' => 'required|date',
        ]);

        $book->update($validated);

        return redirect()->route('book')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('book')->with('success', 'Book deleted successfully.');
    }

    public function show()
    {
        $book = Books::all();
        return view('book', compact('book'));
    }
}
