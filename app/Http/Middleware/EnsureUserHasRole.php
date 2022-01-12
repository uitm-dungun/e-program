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
        if ( $request->user()->hasRoleName('admin') || $request->user()->hasRoleName($role)) {
            return $next($request);
        }
        return redirect('/error')->with('error', 'Role could not be identified, please contact administrator');
    }
}
