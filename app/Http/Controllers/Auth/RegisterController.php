<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Customer;
use App\Employee;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'passport_number' => ['required', 'string', 'max:20', 'passport_exists', 'unique:users'],
            // 'name' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ],
        [
            'passport_number.passport_exists' => 'No customer or employee with such passport number!',
            'passport_number.unique' => 'User with this passport number already exists!'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(null !== Customer::where('passport_number', $data['passport_number'])->first()) {
            return User::create([
                'passport_number' => $data['passport_number'],
                'password' => Hash::make($data['password']),
                'isAdmin' => 0,
            ]);
        }
        else {
            return User::create([
                'passport_number' => $data['passport_number'],
                'password' => Hash::make($data['password']),
                'isAdmin' => 1,
            ]);
        }
    }

    // protected function register(Request $request) {
    //     $passport_number = $request->get('passport_number');
    //     $password_hash = Hash::make($request->get('password'));

    //     $u = new User;

    //     $u->passport_number = $passport_number;
    //     $u->password = $password_hash;

    //     $u->save();
    // }

    // public function activateUser(string $activationCode)
    // {
    //     try {
    //         $user = app(User::class)->where('activation_code', $activationCode)->first();
    //         if (!$user) {
    //             return "The code does not exist for any user in our system.";
    //         }
    //         $user->status          = 1;
    //         $user->activation_code = null;
    //         $user->save();
    //         auth()->login($user);
    //     } catch (\Exception $exception) {
    //         logger()->error($exception);
    //         return "Whoops! something went wrong.";
    //     }
    //     return redirect()->to('/home');
    // }

}
