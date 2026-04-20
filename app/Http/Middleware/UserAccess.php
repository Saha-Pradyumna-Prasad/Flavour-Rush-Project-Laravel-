<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // ইউজার লগইন চেক করুন (auth middleware ইতিমধ্যে চেক করবে)
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'প্লিজ লগইন করুন!');
        }
        
        // শুধুমাত্র 'user' রোলের ইউজার এক্সেস পাবে
        if (Auth::user()->role !== 'user') {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('error', 'এই পেজ অ্যাডমিনদের জন্য নয়!');
            }
            return redirect('/')->with('error', 'আপনার এই পেজে অ্যাক্সেস নেই!');
        }
        
        return $next($request);
    }
}