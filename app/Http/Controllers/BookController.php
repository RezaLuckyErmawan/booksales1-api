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
            'author_id' => 'required|exists:authors,id',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0'
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
            'stock' => $request->stock,
            'price' => $request->price,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully!',
            'data' => $book
        ], 201);
    }

    public function show(string $id) {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $book
        ]);
    }

    public function update(string $id, Request $request) {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        // 2.validator    
        $validator = Validator::make($request->all(),[
            'title' => 'required|string|max:100',
            'author_id' => 'required|exists:authors,id',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

        // 3. update data
        $data = [
            'title' => $request->title,
            'author_id' => $request->author_id,
            'stock' => $request->stock,
            'price' => $request->price,
        ];

        // 4. update data baru kedatabase
        $book->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully!',
            'data' => $book
        ], 200);
    }

    public function destroy(string $id) {
        $book = Book::find($id);

        if (!$book){
            return response()->json([
                'success' => false,
                'message' => 'Book not found',
                'data' => null
            ], 404);
        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete resource successfully'
        ]);        
    }
}


