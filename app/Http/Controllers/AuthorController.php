<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        // $authorModel = new Author();
        // $authors = $authorModel->getAuthors();

        // return view('authors', ['authors' => $authors]);
        $authors = Author::all();
        

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $authors
        ], 200);
    }
}
