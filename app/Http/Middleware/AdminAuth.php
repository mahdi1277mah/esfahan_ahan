<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->isSuperuser() || $request->user()->isStaffuser()){
            return $next($request);
        }elseif ($request->user()->vendor()){

            return $next($request);
        }
        return redirect('/');
    }
}
