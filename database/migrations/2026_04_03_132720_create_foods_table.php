<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // খাবারের নাম (Burger, Pizza ইত্যাদি)
            $table->enum('category', ['Burger', 'Pizza', 'Dessert']); // ক্যাটাগরি
            $table->text('details'); // খাবারের বিবরণ
            $table->decimal('price', 8, 2); // দাম (দশমিক সহ)
            $table->string('image'); // ছবির নাম/পাথ
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};