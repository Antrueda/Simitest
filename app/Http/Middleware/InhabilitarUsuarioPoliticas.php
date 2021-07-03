<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InhabilitarUsuarioPoliticas
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

        if (!is_null(auth()->user()->d_finvinculacion)) {
            // Consulta de la fecha de base de datos y verifica si esta caducada
            $fechaACaducar = Carbon::parse(auth()->user()->d_finvinculacion)->format('Y-m-d H:m:s');
            // Se consulta la fecha contra el valor actual
            if (Carbon::now()->gt($fechaACaducar)) {
                Auth::logout();
                return redirect()->route('login')->with('info', 'Contrato Finalizado, para mayor información contacte al Administrador del Sistema.');
            }

        }


        return $next($request);
    }
}
