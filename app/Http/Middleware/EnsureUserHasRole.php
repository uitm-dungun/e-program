<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(! $request->user()->hasRole($role) ) {
            return redirect('/error')->with('error', 'Role could not be identified, please contact administrator');
        };

        return $next($request);
    }
}
