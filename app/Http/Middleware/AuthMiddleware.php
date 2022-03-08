<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $authMethod)
    {
        echo $authMethod.'<br>';

        if ($authMethod == 'default') {
            echo 'Verificar usuário e senha no db'.'<br>';
        } else {
            echo 'Verificar usuário e senha no AD'.'<br>';
        }

        if(false) {
            return $next($request);
        } else {
            return Response("Acesso negado! A rota necessita de autenticação para ser acessada!");
        }   
    }
}
