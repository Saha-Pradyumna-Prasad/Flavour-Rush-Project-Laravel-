<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        $sliderFoods = Food::inRandomOrder()->limit(5)->get();
        $burgerCount = Food::where('category', 'Burger')->count();
        $pizzaCount = Food::where('category', 'Pizza')->count();
        $dessertCount = Food::where('category', 'Dessert')->count();
        
        return view('home', compact('sliderFoods', 'burgerCount', 'pizzaCount', 'dessertCount'));
    }
    
    public function foodPage($category)
    {
        $validCategories = ['Burger', 'Pizza', 'Dessert'];
        if (!in_array($category, $validCategories)) {
            return redirect('/')->with('error', 'ইনভ্যালিড ক্যাটাগরি!');
        }
        
        $foods = Food::where('category', $category)->paginate(100);
        
        return view('food-page', compact('foods', 'category'));
    }
    
    public function showLogin()
    {
        // ইতিমধ্যে লগইন করা থাকলে ড্যাশবোর্ডে রিডাইরেক্ট করুন
        if (Auth::check()) {
            return redirect()->route(Auth::user()->role === 'admin' ? 'admin.dashboard' : 'user.dashboard');
        }
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        try {
            $credentials = $request->only('email', 'password');
            
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                
                if (Auth::user()->role === 'admin') {
                    return redirect()->route('admin.dashboard')->with('success', 'স্বাগতম অ্যাডমিন!');
                } else {
                    return redirect()->route('user.dashboard')->with('success', 'লগইন সফল!');
                }
            }
            
            return back()->withErrors(['email' => 'ইমেইল বা পাসওয়ার্ড ভুল!'])->withInput();
            
        } catch (\Exception $e) {
            return back()->with('error', 'লগইন করতে সমস্যা হয়েছে: ' . $e->getMessage());
        }
    }
    
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect()->route(Auth::user()->role === 'admin' ? 'admin.dashboard' : 'user.dashboard');
        }
        return view('auth.register');
    }
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user' // ডিফল্ট role 'user'
            ]);
            
            Auth::login($user);
            
            return redirect()->route('user.dashboard')->with('success', 'রেজিস্ট্রেশন সফল! স্বাগতম!');
            
        } catch (\Exception $e) {
            return back()->with('error', 'রেজিস্ট্রেশন করতে সমস্যা হয়েছে: ' . $e->getMessage());
        }
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('success', 'লগআউট সফল!');
    }
    
    public function dashboard()
    {
        // নিশ্চিত করুন ইউজার লগইন আছে
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        // নিশ্চিত করুন role 'user'
        if (Auth::user()->role !== 'user') {
            return redirect()->route('admin.dashboard');
        }
        
        $orders = Order::where('user_id', Auth::id())
                      ->orderBy('created_at', 'desc')
                      ->get();
        
        return view('user.dashboard', compact('orders'));
    }
    
    public function placeOrder(Request $request)
    {
        // নিশ্চিত করুন ইউজার লগইন আছে
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'অর্ডার করতে প্লিজ লগইন করুন!');
        }
        
        $validator = Validator::make($request->all(), [
            'food_name' => 'required|string',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|size:11|regex:/^[0-9]+$/',
            'address' => 'required|string',
            'payment_method' => 'required|in:Bkash,Nagad',
            'transaction_id' => 'required|string'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        try {
            Order::create([
                'user_id' => Auth::id(),
                'food_name' => $request->food_name,
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'payment_method' => $request->payment_method,
                'transaction_id' => $request->transaction_id
            ]);
            
            return redirect()->route('user.dashboard')->with('success', 'অর্ডার কনফার্মড! ধন্যবাদ!');
            
        } catch (\Exception $e) {
            return back()->with('error', 'অর্ডার করতে সমস্যা হয়েছে: ' . $e->getMessage());
        }
    }
}