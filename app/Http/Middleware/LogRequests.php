<?php

namespace App\Http\Middleware;

use Closure;
use \App\Request as HttpRequest;

class LogRequests
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
        

        return $next($request);
    }

    public function terminate($request, $response)
    {
        $http_req = new HttpRequest;
        $http_req->http_status_code = $response->status();
        $http_req->requested_method = $request->method();
        $http_req->route = $request->path();
        $http_req->save();
    }
}
