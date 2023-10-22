<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'firstname' => ['required','string'],
            'lastname'=>['required', 'string'],
            'address' => ['required', 'string'],
            'class' => ['required', 'string'],
            'date_of_birth' => ['required', 'string'],
            'student_number' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'student_number' => $data['student_number'],
            'date_of_birth' => $data['date_of_birth'],
            'role' => $data['role'],
            'klas' => $data['class'],
            'email_verified_at' => now(),
            'email' => $data['email'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'remember_token' => Str::random(10),
            'login_limit' => 10,
            'login_time' => now()
        ]);
    }

//    public function setDefaultSelectedValues() {
//        $value = "hello";
//        return view('auth.register', compact('value'));
//    }
}
