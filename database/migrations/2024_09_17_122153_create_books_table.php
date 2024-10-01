<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id("book_id");
            $table->string("author");
            $table->string("title");
            $table->integer("pieces")->default(1);
            $table->timestamps();
        });

        Book::create([
            "author" => "Peti",
            "title" => "Péter",
            "pieces" => 12
        ]);

        Book::create([
            "author" => "Józsi",
            "title" => "Ernő",
            "pieces" => 1
        ]);

        Book::create([
            "author" => "Bélu",
            "title" => "Igen",
            "pieces" => 3
        ]);

        Book::create([
            "author" => "Zsuszi",
            "title" => "Aha",
            "pieces" => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
