<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ChangePasswor
{
    public function getValidar($request, $next)
    {

        $usuario = Auth::user();
        $actualxx = strtotime(date("Y-m-d "));
        $cambioxx = strtotime($usuario->password_change_at);
        if ($usuario->password_reset_at != null) { //la contraseña ha sido resetiada
            return  redirect()->route('contrase.cambiar', Auth::user()->id)
            ->with('error', 'Para continuar por favor debe actualizar su contraseña');
        } else

        if ($actualxx > $cambioxx) {
            return  redirect()->route('contrase.cambiar', Auth::user()->id)
            ->with('error', 'Para continuar por favor debe actualizar su contraseña');
        } else { 
            return $next($request);
        }
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
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
