<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSuperman
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
        $userRoles = Auth::user()->roles->pluck('name');
        if ($userRoles->contains('superadmin')) {
            return $next($request);
        }
        abort(401, 'This action is unauthorized');
    }
}
