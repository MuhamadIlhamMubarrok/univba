<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        // Memeriksa apakah pengguna sudah terautentikasi
        if (Auth::guest()) {
            // Jika pengguna tidak terautentikasi, redirect ke halaman login dengan pesan error
            return redirect()->route('login')->withErrors('Silahkan Login Terlebih Dahulu');
        }

        // Jika pengguna sudah terautentikasi, lanjutkan request
        return $next($request);
    }
}
