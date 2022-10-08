<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ChangePasswor
{
    public function getValidar($request, $next, $usuario)
    {
        $actualxx = strtotime(date("Y-m-d "));
        $cambioxx = strtotime($usuario->password_change_at);
     
        if ($usuario->password_reset_at != null) { //la contraseña ha sido resetiada
            
            return  redirect()->route('contrase.cambiar', Auth::user()->id)
                ->with('error', 'Para continuar por favor debe actualizar su contraseña');
        } else

        if ($actualxx > $cambioxx) { dd($usuario->password_change_at );
            return  redirect()->route('contrase.cambiar', Auth::user()->id)
                ->with('error', 'Para continuar por favor debe actualizar su contraseña');
        } elseif ($usuario->polidato_at == null) {
            return  redirect()->route('acuerdo.cambiar', Auth::user()->id)
                ->with('error', 'Para continuar por favor acepte el acuerdo de confidencialidad');
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
        $usuario = Auth::user();
        /**
         * el usuario esta en la ruta de cambio de contraseña o el acuerdo de confidencialidad
         */
        if (
            isset($request->segments()[1]) &&
            ($request->segments()[1] == 'cambiocontra' ||
                $request->segments()[1] == 'acuerdo')) {
            return $next($request);
        } elseif (isset($request->segments()[0]) && $request->segments()[0] == "logout") {
            return $next($request);
        } else {
            return $this->getValidar($request, $next, $usuario);
        }
    }
}
