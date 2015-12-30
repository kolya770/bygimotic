<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ( ! $request->user()->is_admin) {
            if ($request->ajax()) {
                return response('Forbidden.', 403);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        return $next($request);
    }
}
