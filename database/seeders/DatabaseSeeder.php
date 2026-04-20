<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // অ্যাডমিন ইউজার
        User::create([
            'name' => 'Admin User',
            'email' => 'admin123@fr.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
        
        // সাধারণ ইউজার
        User::create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user'
        ]);
        
        // Foods
        Food::create([
            'name' => 'চিজ বার্গার',
            'category' => 'Burger',
            'details' => 'ডাবল চিজ, তাজা লেটুস, টমেটো এবং স্পেশাল সস সহ সুপার সফট বান',
            'price' => 350,
            'image' => 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400'
        ]);
        
        Food::create([
            'name' => 'চিকেন বার্গার',
            'category' => 'Burger',
            'details' => 'গ্রিল চিকেন প্যাটি, মেয়োনিজ, লেটুস এবং পেঁয়াজ সহ',
            'price' => 320,
            'image' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?w=400'
        ]);
        
        Food::create([
            'name' => 'মার্গেরিটা পিৎজা',
            'category' => 'Pizza',
            'details' => 'টমেটো সস, মোজারেলা চিজ, তাজা তুলসী পাতা',
            'price' => 450,
            'image' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?w=400'
        ]);
        
        Food::create([
            'name' => 'পেপারনি পিৎজা',
            'category' => 'Pizza',
            'details' => 'ইটালিয়ান পেপারনি, এক্সট্রা চিজ, অলিভ',
            'price' => 550,
            'image' => 'https://images.unsplash.com/photo-1628840042765-356cda07504e?w=400'
        ]);
        
        Food::create([
            'name' => 'চকলেট কেক',
            'category' => 'Dessert',
            'details' => 'সফট চকলেট কেক, চকলেট গনাচে টপিং',
            'price' => 280,
            'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=400'
        ]);
        
        Food::create([
            'name' => 'আইসক্রিম',
            'category' => 'Dessert',
            'details' => 'ভ্যানিলা, চকলেট, স্ট্রবেরি - যেকোনো একটি ফ্লেভার',
            'price' => 150,
            'image' => 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?w=400'
        ]);
    }
}