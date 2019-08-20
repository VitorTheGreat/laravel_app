<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
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
        //to make a middleware enable just go to /app/http/Kernel.php and add it to the session that you want
        //! read there the comments about each one!

        //Keep in mind, middleware is a good place to fire events
        return $next($request);

        //silly example here
        // if(now()->format('s') % 2) {
        //     return $next($request);
        // }

        // return respons('Not Allowed');
    }
}
