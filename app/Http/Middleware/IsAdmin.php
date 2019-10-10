<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::User();
            if ($user) {
                return $next($request);
            } else {
                return redirect('admin/login')->with('msg','chưa đủ đẹp zai để đăng nhập');
            }
            
        } else {
            return redirect('admin/login');
        }
        
    }
}
