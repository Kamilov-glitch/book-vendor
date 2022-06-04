<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        return view('books.books');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request, Book $book)
    {
        $book->name = $request['name'];
        $book->description = $request['description'];
        $book->price = $request['price'];
        // $book->user_id = Auth::user()->id;
        $book->save();

        return redirect('/home');
    }
}
