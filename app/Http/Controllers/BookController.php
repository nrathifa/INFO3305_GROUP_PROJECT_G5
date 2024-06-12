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
        return view('admin.book.book', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('admin.book.add-book');
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

        return redirect()->route('admin.book.book')->with('success', 'Book added successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $book)
    {
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'date_published' => 'required|date',
        ]);

        $book->update($validated);

        return redirect()->route('admin.book.book')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('admin.book.book')->with('success', 'Book deleted successfully.');
    }
    public function show()
    {
        $book = Books::all();
        return view('admin.book', compact('book'));
    }
}
