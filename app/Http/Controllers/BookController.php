<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan semua data (READ)
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    // Form untuk CREATE
    public function create()
    {
        return view('books.create');
    }

    // Menyimpan data baru (CREATE)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'isbn' => 'required|unique:books',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'description' => 'nullable',
            'stock' => 'required|integer|min:0'
        ]);

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan!');
    }

    // Menampilkan detail satu data (READ)
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // Form untuk EDIT
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Update data (UPDATE)
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'description' => 'nullable',
            'stock' => 'required|integer|min:0'
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diupdate!');
    }

    // Hapus data (DELETE)
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus!');
    }
}