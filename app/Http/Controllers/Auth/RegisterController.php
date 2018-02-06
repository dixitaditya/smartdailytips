<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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

    public function getSignupForm()
    {
       
        return view('signupform');
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
            'title_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_add' => 'required',
            'apt' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'dob_month' => 'required',
            'dob_day' => 'required',
            'dob_year' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
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
        $mydob='2018-1-22';
        
        return User::create([
            'title_name' => $data['title_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'street_add' => $data['street_add'],
            'apt' => $data['apt'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'date_of_birth' => $mydob,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // return User::create([
        //     'title_name' => 'aaaa',
        //     'first_name' => 'aaaa',
        //     'last_name' => 'aaaa',
        //     'street_add' => 'aaaa',
        //     'apt' => 'aaaa',
        //     'city' => 'aaaa',
        //     'state' => 'aaaa',
        //     'zip' => 'aaaa',
        //     'date_of_birth' => $mydob,
        //     'email' => 'aaaa',
        //     'password' => 'aaaa',
        // ]);
    }
}
