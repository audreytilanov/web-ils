<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if (auth()->user()->userHasPermissions->where('component_name', 'user')->where('permissions', 'admin')->isEmpty()) {
            return abort(403);
        }
        return $next($request);
    }
}