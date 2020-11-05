<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where('status', false)->get();

        return view('book.index', compact('books'));
    }

    public function show(int $id)
    {
        $book = Book::with('reviews')->find($id);

        return view('book.show', compact('book'));
    }
}
