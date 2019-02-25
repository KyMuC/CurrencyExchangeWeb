<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->only('passport_number', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->to('/home');
    //     }
    // }

    // public function authenticate(Request $request)
    // {
    //     $passport_number = $request->get('passport_number');
    //     $password = $request->get('password');

    //     $user = User::where('passport_number', $passport_number)->first();

    //     if($user !== null) {
    //         if($user->password === $password) {
    //             Auth::loginUsingId($user->id);
    //         }
    //     }
    //     return redirect()->to('/home');
    // }

    public function username() {
        return 'passport_number';
    }

    // protected function credentials(Request $request)
    // {
    //     return [
    //         'passport_number'=>$request->get('passport_number'),
    //         'password'=>$request->password,
    //     ];
    // }
}
