<?php

namespace App\Http\Middleware;

use Closure;

class ValidarAdmin
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
        if ($request->user() == null || !$request->user()->hasRole($role)) {
            return redirect(route('home'))->with('message', 'Lo sentimos no cuenta con los permisos necesarios para acceder a la pagina!!');
            /* return redirect(route('home')); */
           } else {
            return $next($request);
           }
    }
}
