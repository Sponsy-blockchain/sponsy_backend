<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        switch ($role) {
            case 'sponsee':
                $role = 0;
                break;
            case 'sponsor':
                $role = 1;
                break;
        }
        if ($request->user()->business_type != $role) {
            abort('404');
        }

        return $next($request);
    }
}
