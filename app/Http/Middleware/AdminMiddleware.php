<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        // Periksa apakah pengguna yang sedang masuk adalah admin
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        // Jika pengguna bukan admin, kembalikan ke halaman sebelumnya atau halaman beranda
        return redirect()->back()->with('error', 'Unauthorized');
    }
}
