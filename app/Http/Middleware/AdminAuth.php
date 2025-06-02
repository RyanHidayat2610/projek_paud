<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('is_admin')) {
            return redirect()->route('admin.login.form');
        }

        return $next($request);
    }
}
