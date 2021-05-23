<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RoleController;
use app\models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$role)
    {

            if (in_array((new RoleController())->isRole(), $role)) {
                return $next($request);
            }
            abort(403);


    }
}
