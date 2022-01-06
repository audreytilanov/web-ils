<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ComponentPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $component, $permission = null)
    {

        if ($permission == null) {
            if (auth()->user()->userHasPermissions->where('component_name', $component)->isEmpty()) {
                return abort(403);
            }
        } else {
            if (auth()->user()->userHasPermissions->where('component_name', $component)->where('permissions', 'can ' . $permission)->isEmpty()) {
                return abort(403);
            }
        }
        return $next($request);
    }
}