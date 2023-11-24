<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        if (auth()->user()->role != $role) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}