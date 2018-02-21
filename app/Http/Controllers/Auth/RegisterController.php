<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Subscribe;

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

    public function getSignupFormRef()
    {
       
        return view('signupform_ref_yellow');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     
    protected function validator(array $data)
    {   
        // dd(dob_cal);
        return Validator::make($data, [
            'title_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_add' => 'required|max:255',
            'apt' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'dob_cal' => 'required|max:10',
            'email' => 'required|unique:users|string|email|max:255|confirmed',
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
        $ref= request()->headers->get('referer');
        // $ref="papa";
        // dd($ref);
        // $mydob='2018-1-22';
        // $dob = $data['dob_year']."-".$data['dob_month']."-".$data['dob_day'];
        $dob=str_replace('/', '-', $data['dob_cal']);
        //because of regex i have is working on dd-mm-yy i have to change the date type to 
        $dob =date('Y-m-d', strtotime($dob));
        // dd($dob);
       if(isset($data['receive_updates'])){
        if(Subscribe::where('email',$data['email'])->where('subscription_category', '0')->exists() ){
            // do othing
         }
         else{
              // to subscribe a new user to news letter
              $newSubscription = new Subscribe;
              $newSubscription->email = $data['email'];
              $newSubscription->subscription_category = 0;
              $newSubscription->save();
         }
       }
        if( $data['email'] === $data['email_confirmation'] && $data['password'] === $data['password_confirmation']){
            
            // dd($ref);
            return User::create([
                'title_name' => $data['title_name'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'street_add' => $data['street_add'],
                'apt' => $data['apt'],
                'city' => $data['city'],
                'state' => $data['state'],
                'zip' => $data['zip'],
                'date_of_birth' => $dob,
                'email' => $data['email'],
                'ref' => $ref,
                'password' => bcrypt($data['password']),
            ]);
        } 
    }
}
