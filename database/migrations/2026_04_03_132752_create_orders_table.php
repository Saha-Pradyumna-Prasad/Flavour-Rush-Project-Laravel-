

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ইউজারের সাথে সম্পর্ক
            $table->string('food_name'); // অর্ডারকৃত খাবারের নাম
            $table->string('name'); // অর্ডারকারীর নাম
            $table->string('phone', 11); // ফোন নম্বর (১১ ডিজিট)
            $table->text('address'); // ডেলিভারি ঠিকানা
            $table->enum('payment_method', ['Bkash', 'Nagad']); // পেমেন্ট মেথড
            $table->string('transaction_id'); // ট্রানজেকশন আইডি
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};