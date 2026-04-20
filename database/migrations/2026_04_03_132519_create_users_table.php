<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id - auto increment
            $table->string('name'); // ইউজারের নাম
            $table->string('email')->unique(); // ইউনিক ইমেইল
            $table->string('password'); // পাসওয়ার্ড (হ্যাশ হবে)
            $table->enum('role', ['admin', 'user'])->default('user'); // রোল: admin অথবা user
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
