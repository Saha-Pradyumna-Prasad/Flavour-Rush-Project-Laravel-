<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('role', 'user')->orderBy('created_at', 'desc')->get();
        $orders = Order::with('user')->orderBy('created_at', 'desc')->get();
        $totalUsers = $users->count();
        $totalOrders = $orders->count();
        $totalRevenue = $orders->count() * 300;
        
        return view('admin.dashboard', compact('users', 'orders', 'totalUsers', 'totalOrders', 'totalRevenue'));
    }
    
    public function deleteOrder($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();
            
            return back()->with('success', 'অর্ডার ডিলিট করা হয়েছে!');
            
        } catch (\Exception $e) {
            return back()->with('error', 'অর্ডার ডিলিট করতে সমস্যা হয়েছে: ' . $e->getMessage());
        }
    }
}