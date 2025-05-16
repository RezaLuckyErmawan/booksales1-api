<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // public function getAuthors()
    // {
    //     return [
    //         ['id' => 1, 'name' => 'Andrea Hirata'],
    //         ['id' => 2, 'name' => 'Tere Liye'],
    //         ['id' => 3, 'name' => 'Dewi Lestari'],
    //         ['id' => 4, 'name' => 'Habiburrahman El Shirazy'],
    //         ['id' => 5, 'name' => 'Pramoedya Ananta Toer'],
    //     ];
    // }
    protected $fillable = ['name'];
}
