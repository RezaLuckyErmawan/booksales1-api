<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye'],
            ['name' => 'Andrea Hirata'],
            ['name' => 'Dee Lestari'],
            ['name' => 'Habiburrahman El Shirazy'],
            ['name' => 'Ahmad Fuadi'],
        ]);
    }
}
