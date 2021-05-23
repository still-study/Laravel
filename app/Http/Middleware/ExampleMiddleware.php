<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RoleController;
use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ?string $role = null)
    {
        if($role = 'admin' && $request->has('who')) {
            $rol = new RoleController();
            dump($rol->isAdmin());
        }
        dump('good');

        return $next($request);
    }
}
