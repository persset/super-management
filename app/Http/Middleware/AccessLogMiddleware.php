<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AccessLog;

class AccessLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);

        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        
        AccessLog::create(['log' => "O IP: $ip requisitou a seguinte rota: $route"]);

        return Response('Chegamos ao middlware');
    }
}
