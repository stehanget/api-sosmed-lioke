<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class SimpleRole
 * @package Thiagoprz\SimpleRole\Http\Middleware
 */
class SimpleRole
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $args = func_get_args();

        if (isset($request->user()->role)) {
            if (!in_array($request->user()->role, array_slice($args, 2))) {
                return abort(401);
            }
        } else {
            return abort(401);
        }
        
        return $next($request);
    }
}