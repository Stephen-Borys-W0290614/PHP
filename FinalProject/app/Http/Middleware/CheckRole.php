<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!$request->user()) {
            return redirect('/');
        }
        foreach ($roles as $role) {

            if ($request->user()->hasRole($role)) {
                return $next($request);
            }

        }

        return redirect('/');
    }

}
