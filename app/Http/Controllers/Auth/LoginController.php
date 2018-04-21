<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
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
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    protected function authenticated(Request $request, $user)
    {

        $credentials = $request->only('email', 'password');

        if ($request->form == 'admin') {
            if ($user->hasRole('ADMIN') and Auth::check()) {
                // Authentication passed...
                return redirect()->intended('/admin/products');
            } else {
                Auth::logout();
                return redirect()->intended('/admin/login');
            }
        } else {
                return redirect()->back();
            }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        Auth::logout();
        if ($request->form == 'admin')
            return redirect()->intended('/admin/products');
        else
            return redirect('/');
    }

}
