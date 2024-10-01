<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id("copy_id");
            $table->foreignId('book_id')->references('book_id')->on('books');
            $table->boolean("hardcovered")->default(false);
            $table->year("publication")->default("2020");
            $table->smallInteger("status")->default(0);
            $table->timestamps();
        });

        Copy::create(
            [
                "book_id" => 1,
                "publication" => "2004"
            ]
        );

        Copy::create(
            [
                "book_id" => 1,
                "hardcovered" => true,
            ]
        );

        Copy::create(
            [
                "book_id" => 2,
                "status" => 2,
            ]
        );

        Copy::create(
            [
                "book_id" => 2,
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
