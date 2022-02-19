<?php

namespace App\Http\Middleware;

use App\Models\Publisher;
use Closure;
use Illuminate\Http\Request;

class IsPublisher
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
            if (!Publisher::isPublisher($id)) { // jika user bukan merupakan publisher
                Publisher::bePublisher($id);  // menjadikan user sebagai publisher
            }
            return $next($request);
        }
    }
}
