<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
class SubscriptionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | subscription_category 
    |--------------------------------------------------------------------------
    |
    | subscription category enrties are hard coded
    | 0 = 'generic';
    | 1 = 'Mind & Body'
    | 2 = 'Healthy Bytes'
    | 3 = 'Good Parenting'
    | 4 = 'Beauty Tips'
    | 5 = 'Love Tips'
    |
    */

    public function subscribeOnly(Request $request){
    
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);
        if(Subscribe::where('email',$request->email)->exists())
        {
             return view('partials.subscribedAlreadyModal');
        }
        else{
        $newSubscription = new Subscribe;
        $newSubscription->email = $request->email;
        $newSubscription->subscription_category = 0;
        $newSubscription->save();
        }
        return view('partials.subscribedModal');
       
    }

    public function subscribeWithCategories(){
        dd('subscribedOnly');
    }

    public function substest(){
      
        return 'falala';
    }

    public function postsubstest(Request $request){
        
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $newSubscription = new Subscribe;
        $newSubscription->email = $request->email;
        $newSubscription->subscription_category = 0;
        $newSubscription->save();
       
        return 'saved in db';
      }
}
