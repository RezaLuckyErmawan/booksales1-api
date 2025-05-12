<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],

        [
            'title' => 'Sebuah Seni Untuk Bersikap Bodoh Amat',
            'description' => 'Buku yang Membahas Tentang Kehidupan dan Filosofi Hidup Seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],

        [
            'title' => 'Naruto',
            'description' => 'Buku yang Membahas tentang Jalan Ninja Seseorang',
            'price' => 30000,
            'stock' => 50,
            'cover_photo' => 'Naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ],
    ];

    public function getBooks() {
        return $this->books;
    }
}
