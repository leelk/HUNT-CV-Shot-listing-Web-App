<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminRegisterController extends Controller
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
        $this->middleware('guest:admin');
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
            'c_name' => 'required|string|max:30',
            'email' => 'required|string|email|max:30|unique:admins',
            'c_phone' => 'required|string|max:10',
            'password' => 'required|string|min:6|confirmed',
            'c_field' => 'string',
            'c_city' =>'required|string|max:28',
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
        return Admin::create([
            'c_name' => $data['c_name'],
            'email' => $data['email'],
            'c_phone' => $data['c_phone'],
            'password' => bcrypt($data['password']),
            'c_field' => $data['c_field'],
            'c_city' => $data['c_city'],

        ]);


    }
}
