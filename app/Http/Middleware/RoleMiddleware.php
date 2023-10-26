<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;


class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        return Auth::check() && Auth::user()->hasRole($role) ? $next($request) : abort(403);
    }
}
