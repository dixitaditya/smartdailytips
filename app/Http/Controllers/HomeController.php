<?php

namespace App\Http\Controllers;
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

use Illuminate\Http\Request;
use App\Quiz;
class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Make a home controller route to send the base link
    |
    | home controller basically fetches the data for first run
    |--------------------------------------------------------------------------
    |
    | and set $_SESSION['quiz_id']=1 and fetch the quiz
    | set  $_SESSION['correct-attempt'] to zero
    |
    */  

    // public function index(){
    //     // $_SESSION['quiz_id']=1;
    //     $quiz = Quiz::inRandomOrder()->first();
    //     $_SESSION['quiz_id']=$quiz->id;
    //     return view('welcome')->with('quiz',$quiz);
    // }

    public function index(){
        $_SESSION['quiz_id']=1;
        $_SESSION['correct_attempt']=0;
        $quiz = Quiz::find($_SESSION['quiz_id']);
        $_SESSION['quiz_id']=$quiz->id;
        return view('welcome')->with('quiz',$quiz);
    }

    

}
