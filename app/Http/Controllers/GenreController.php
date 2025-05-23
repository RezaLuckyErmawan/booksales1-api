<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }
    
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil ditambahkan',
            'data' => $genre
        ], 201);
    }

    public function show(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $genre
        ]);
    }

    public function update(string $id, Request $request) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        // 2.validator    
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

        // 3. update data
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // 4. update data baru kedatabase
        $genre->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully!',
            'data' => $genre
        ], 200);
    }

    public function destroy(string $id) {
        $genre = Genre::find($id);

        if (!$genre){
            return response()->json([
                'success' => false,
                'message' => 'Book not found',
                'data' => null
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete resource successfully'
        ]);        
    }
}
