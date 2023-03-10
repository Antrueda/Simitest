<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the Application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your Applications.
    |
    */
    protected $maxAttempts = 3; // De manera predeterminada sería 5
    protected $decayMinutes = 1; // De manera predeterminada sería 1
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(LoginRequest $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['sis_esta_id' => 1]);
    }
    public function username()
    {
        return 's_documento';
    }
    public function login(LoginRequest $request)
    {
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this Application. We'll key this by the username and
        // the IP address of the client making these requests into this Application.
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }




    protected function authenticated(Request $request, User $user)
    {
        if (!is_null(auth()->user()->d_finvinculacion)) {
            // Consulta de la fecha de base de datos y verifica si esta caducada
            $fechaACaducar = Carbon::parse(auth()->user()->d_finvinculacion)
            ->addDay()
            ->format('Y-m-d H:m:s');
            // Se consulta la fecha contra el valor actual
            if (Carbon::now()->gt($fechaACaducar)) {
                $user->update([ "user_edita_id" => "1","sis_esta_id" => "2"]);
                Auth::logout();
                return redirect()->route('login')->with('info', 'Contrato Finalizado, para mayor información contacte al Administrador del Sistema.');
            }
        }
    }
}
