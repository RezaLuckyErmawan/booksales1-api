<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'author_id' => 1,
                'title' => 'Bumi',
                'stock' => 10,
                'price' => 85000.00,
            ],
            [
                'author_id' => 2,
                'title' => 'Laskar Pelangi',
                'stock' => 15,
                'price' => 90000.00,
            ],
            [
                'author_id' => 3,
                'title' => 'Supernova',
                'stock' => 12,
                'price' => 95000.00,
            ],
            [
                'author_id' => 4,
                'title' => 'Ayat-Ayat Cinta',
                'stock' => 8,
                'price' => 88000.00,
            ],
            [
                'author_id' => 5,
                'title' => 'Negeri 5 Menara',
                'stock' => 20,
                'price' => 92000.00,
            ],
        ]);
    }
}
