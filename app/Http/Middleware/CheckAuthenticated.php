<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (!auth()->guard('admins_login')->check() && !auth()->guard('web')->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}
