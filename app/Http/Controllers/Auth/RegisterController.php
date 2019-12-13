<?php

namespace App\Http\Controllers\Auth;

use Alert;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'parent_name' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'parent_phone' => 'required|string',
            'title' => 'required|string|max:6',
            'class' => 'required|string|max:6',



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
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make('12345678'),
            'parent_name' => $data['parent_name'],
            'parent_phone' => $data['parent_phone'],
            'title' => $data['title'],
            'class' => $data['class'],
            'school' => $data['school'],
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName']
        ]);

     Alert::message('Hello ','STUDENT HAS BEEN SUCCESFUULY REGISTERED')->autoclose(3000);




    }
}
