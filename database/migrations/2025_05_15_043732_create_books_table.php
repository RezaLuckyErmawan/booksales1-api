<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // id buku
            $table->string('title'); // judul buku
            $table->unsignedBigInteger('author_id'); // foreign key ke authors
            $table->integer('stock')->default(0); // stok buku
            $table->decimal('price', 10, 2); // harga buku
            $table->timestamps();

            // Membuat relasi foreign key dengan tabel authors
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
