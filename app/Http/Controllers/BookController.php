<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Validator;
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

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:100',
            'author_id' => 'required|exists:authors,id'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

        $book = Book::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully!',
            'data' => $book
        ], 201);
    }
}


