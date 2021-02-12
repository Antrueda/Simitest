<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PoliticaDatosMiddleware
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
        $usuario = Auth::user();
        if (isset($request->segments()[1])&& $request->segments()[1]=='acuerdo') {
            return $next($request);
        }else if($usuario->polidato_at == null){
            return  redirect()->route('acuerdo.cambiar', $usuario->id);
        }
        return $next($request);
    }
}
/*
    public function handle($request, Closure $next)
    {
        if (isset($request->segments()[1])) {
            if ($request->segments()[1] == 'cambiocontra') {
                return $next($request);
            } else {
                return $this->getValidar($request, $next);;
            }
        } else {
            return $this->getValidar($request, $next);;
        }

        //return redirect()->action('Seguridad\Usuario\UsuarioController@index');
        //
    }
}
