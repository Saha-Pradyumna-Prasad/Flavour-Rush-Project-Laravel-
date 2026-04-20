

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;

// পাবলিক রাউট (সবাই দেখতে পারে)
Route::get('/', [UserController::class, 'home'])->name('home');

// navbar er routing er jonno
Route::get('/food/{category}', [UserController::class, 'foodPage'])->name('food.page');

// অথেনটিকেশন রাউট
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// ইউজার প্রটেক্টেড রাউট (লগইন করা ইউজার)
Route::middleware(['auth', 'user.access'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::post('/place-order', [UserController::class, 'placeOrder'])->name('place.order');
});

// অ্যাডমিন প্রটেক্টেড রাউট (শুধু অ্যাডমিন)
Route::middleware(['auth', 'admin.access'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::delete('/order/{id}', [AdminController::class, 'deleteOrder'])->name('admin.delete.order');
    
    // ফুড ম্যানেজমেন্ট
    Route::get('/foods', [FoodController::class, 'index'])->name('admin.foods');
    Route::get('/food/create', [FoodController::class, 'create'])->name('admin.food.create');
    Route::post('/food', [FoodController::class, 'store'])->name('admin.food.store');
    Route::get('/food/{id}/edit', [FoodController::class, 'edit'])->name('admin.food.edit');
    Route::put('/food/{id}', [FoodController::class, 'update'])->name('admin.food.update');
    Route::delete('/food/{id}', [FoodController::class, 'destroy'])->name('admin.food.delete');
});