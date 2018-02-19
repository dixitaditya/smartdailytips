<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Subscribe;

class RefRegisterController extends Controller
{
    public function registerReferralUser(Request $request){
        // dd('here');
        $validatedData = $request->validate([
            'title_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'street_add' => 'required|max:255',
            'apt' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'dob_cal' => 'required|max:10',
            'email' => 'required|string|email|max:255|confirmed',
            'password' => 'required|string|min:6|confirmed',
        ]);

         $dob=str_replace('/', '-', $request->dob_cal);
        //  dd($dob);
        if(isset($request['receive_updates'])){
         if(Subscribe::where('email',$request['email'])->where('subscription_category', '0')->exists() ){
             // do othing
          }
          else{
               // to subscribe a new user to news letter
               $newSubscription = new Subscribe;
               $newSubscription->email = $request['email'];
               $newSubscription->subscription_category = 0;
               $newSubscription->save();
          }
        }
         if( $request['email'] === $request['email_confirmation'] && $request['password'] === $request['password_confirmation']){
             

 
             return User::create([
                 'title_name' => $request['title_name'],
                 'first_name' => $request['first_name'],
                 'last_name' => $request['last_name'],
                 'street_add' => $request['street_add'],
                 'apt' => $request['apt'],
                 'city' => $request['city'],
                 'state' => $request['state'],
                 'zip' => $request['zip'],
                 'date_of_birth' => $dob,
                 'email' => $request['email'],
                 'password' => bcrypt($request['password']),
             ]);
         } 
        // dd(request()->headers->get('referer'));
    }
}
