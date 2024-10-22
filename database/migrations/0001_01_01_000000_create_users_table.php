<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->string('password');
            $table->boolean("role")->default(1);
            $table->timestamps();
        });

        User::create([
            "name" => "admin",
            "email" => "asd@asd.com",
            "password" => Hash::make("admin1234"),
            "role" => 0
        ]);

        User::create([
            "name" => "user",
            "email" => "asd1@asd.com",
            "password" => Hash::make("user1234"),
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
