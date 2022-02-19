<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class IsEmailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $id = session('id', 0);
        if ($id == 0) { // jika belum login
            return redirect()->route('login');
        }
        else { // jika sudah login
            if (User::isEmailVerified($id)) { // jika email sudah diverifikasi
                return $next($request);
            }
            else {
                return $next($request);
            }
        }
    }
}
