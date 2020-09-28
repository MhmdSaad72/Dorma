<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*======================================
         login function for admin
    ========================================*/
    public function login(Request $request)
    {
      $validator = $this->validate($request , [
                      'email' => 'required',
                      'password' => 'required',
                    ]);

      if (Auth::attempt($validator) && Auth::user()->hasRole('Administrator')) {
         return redirect()->route('dashboard');
      }else {
        Auth::logout();
        return redirect()->back()->with('emailError' , 'These credentials do not match our records.')->withInput();
      }
    }
}
