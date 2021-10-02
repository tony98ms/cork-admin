<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;




    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function verificarEstado($user)
    {
        $datos = User::selectRaw('timestampdiff(DAY, activated_at, curdate()) as dato')->where('id', $user->id)->first();
        if ($datos->dato >= 12) {
            $user->estado = 'off';
            $user->save();
        }
    }


    public function authenticated($request, $user)
    {
        // $this->verificarEstado($user);
        if ($user->status == 'inactivo') {
            Auth::guard()->logout();
            $request->session()->invalidate();
            return redirect('/login')->withInput()->with('message', 'Tu cuenta esta desactivada, por favor comunicate con el administrador');
        }

        $user->access_at = Carbon::now();
        $user->save();


        // Redireccion

        return redirect()->route('admin.index');
    }
    protected function credentials(Request $request)
    {
        $login = $request->input($this->username());
        // Comprobar si el input coincide con el formato de E-mail
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        return [
            $field => $login,
            'password' => $request->input('password')
        ];
    }

    public function username()
    {
        return 'login';
    }
}
