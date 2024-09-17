<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
        });

        User::create([
            "name" => "asd",
            "email" => "asd@asd.com",
        ]);

        User::create([
            "name" => "asd",
            "email" => "asd1@asd.com",
        ]);

        User::create([
            "name" => "asd",
            "email" => "asd2@asd.com",
        ]);

        User::create([
            "name" => "asd",
            "email" => "asd3@asd.com",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
