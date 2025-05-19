<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        // $data = new Book();
        // $books = $data->getBooks();

        // return view('books', ['books' => $books]);
        $books = Book::all();


        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $books
        ], 200);
    }
}
