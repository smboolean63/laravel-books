<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        // SELECT * FROM books
        $books = Book::all();
        
        //['books' => $books]
        return view('home', compact('books'));
    }

    public function show($id)
    {
        // SELECT * FROM books WHERE id = $id
        // $book = Book::where('id', $id)->first();
        $book = Book::find($id);
        
        return view('show', compact('book'));
    }
}
