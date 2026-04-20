<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAccess
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
        // চেক করা ইউজার লগইন করেছে এবং অ্যাডমিন কিনা
        if (!Auth::check()) {
            return redirect('/')->with('error', 'প্লিজ লগইন করুন!');
        }
        
         if (Auth::user()->role !== 'admin') {
            if (Auth::user()->role === 'user') {
                return redirect('/user/dashboard')->with('error', 'এই পেজ আপনার জন্য না!');
            }
            return redirect('/')->with('error', 'অননুমোদিত অ্যাক্সেস!');
        }
        
        
        return $next($request);
    }
}