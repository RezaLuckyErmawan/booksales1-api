<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function getGenres()
    {
        return [
            ['id' => 1, 'name' => 'Fiksi'],
            ['id' => 2, 'name' => 'Non-Fiksi'],
            ['id' => 3, 'name' => 'Sejarah'],
            ['id' => 4, 'name' => 'Teknologi'],
            ['id' => 5, 'name' => 'Biografi'],
        ];
    }
}
