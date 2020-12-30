<?php

namespace App\Http\Middleware;

use Closure;

class ValidarLogin
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
        if ($request->user() == null) {
            return redirect(route('home'))->with('message', 'Lo sentimos no cuenta con los permisos necesarios para acceder a la pagina!!');
            /* return redirect(route('home')); */
           } else {
            return $next($request);
           }
    }
}
