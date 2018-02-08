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
    |
    |  llength based validation to avoid the scripting attack length = 1;
    |
    |
    */

    public function subscribeOnly(Request $request){
        // return 'good';
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

    public function subscribeWithCategories(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'option1' => 'max:1',
            'option2' => 'max:1',
            'option3' => 'max:1',
            'option4' => 'max:1',
            'option5' => 'max:1',
        ]);
        // dd($request->option1);
        $options_array =array();
        // dd($options_array);
        if($request->option1 !== NULL){
           array_push($options_array,$request->option1);
        }
        if($request->option2 !== NULL){
            array_push($options_array,$request->option2);
         }
         if($request->option3 !== NULL){
            array_push($options_array,$request->option3);
         }
         if($request->option4 !== NULL){
            array_push($options_array,$request->option4);
         }
         if($request->option5 !== NULL){
            array_push($options_array,$request->option5);           
         }
         
         if(Subscribe::where('email',$request->email)->where('subscription_category', '0')->exists())
         {
              dd('already subscribed for generic category');
         }
        else{
            foreach($options_array as $single_option){

                if( !(Subscribe::where('email',$request->email)->where('subscription_category', $single_option)->exists() ))
                {
                $newSubscription = new Subscribe;
                $newSubscription->email = $request->email;
                $newSubscription->subscription_category = $single_option;
                $newSubscription->save();
                 }

            }
        }

        return view('partials.subscribed');
    }

    public function ajaxsubscribeWithCategories(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'option1' => 'max:1',
            'option2' => 'max:1',
            'option3' => 'max:1',
            'option4' => 'max:1',
            'option5' => 'max:1',
        ]);
        // dd($request->option1);
        $options_array =array();
        // dd($options_array);
        if($request->option1 !== NULL){
           array_push($options_array,$request->option1);
        }
        if($request->option2 !== NULL){
            array_push($options_array,$request->option2);
         }
         if($request->option3 !== NULL){
            array_push($options_array,$request->option3);
         }
         if($request->option4 !== NULL){
            array_push($options_array,$request->option4);
         }
         if($request->option5 !== NULL){
            array_push($options_array,$request->option5);           
         }
         
         if(Subscribe::where('email',$request->email)->where('subscription_category', '0')->exists())
         {
              dd('already subscribed for generic category');
         }
        else{
            foreach($options_array as $single_option){

                if( !(Subscribe::where('email',$request->email)->where('subscription_category', $single_option)->exists() ))
                {
                $newSubscription = new Subscribe;
                $newSubscription->email = $request->email;
                $newSubscription->subscription_category = $single_option;
                $newSubscription->save();
                 }

            }
        }

        return view('partials.subscribed');
    }
   
}
