<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        // this means allow any origin to access my endpoints
        // header('Access-Control-Allow-Origin: *');
        // allow this http method from any origin/domain to access the respective laravel endpoints
        // header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE');
        // allow these content types from any origin/domain
        //header('Access-Control-Allow-Headers: Content-type,X-Auth-Token,Authorization,Origin');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-type, X-Auth-Token, Authorization, Origin');
        return $next($request);
    }
}
