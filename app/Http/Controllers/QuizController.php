<?php

namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use Auth;
use App\Quiz;
use App\User;
use App\Quizscore;

class QuizController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | folowing session are set in home controller
    |--------------------------------------------------------------------------
    |
    | $_SESSION['quiz_id'] = 1 and fetch the quiz
    | $_SESSION['correct-attempt'] to zero
    |
    */ 



    public function getRandomQuiz(){
        // dd('here');
        $quiz = Quiz::inRandomOrder()->first();
        return $quiz;
    }

    public function getQuizInOrder(){
        // dd($_SESSION['quiz_id']=1);
        if( $_SESSION['quiz_id']==1){
            $_SESSION['quiz_id'] = 2;
        }
        $quiz = Quiz::find($_SESSION['quiz_id']);
        if($_SESSION['quiz_id'] <= Quiz::count()){
            $_SESSION['quiz_id']++;
            return $quiz;
        }
        else dd(Auth::user()->id);
       
       
    }
    public function getNextQuiz(){
        // dd($_SESSION['quiz_id']=1);
        // if( $_SESSION['quiz_id']==1){
        //     $_SESSION['quiz_id'] = 2;
        // }
        $_SESSION['quiz_id']++;
        if($_SESSION['quiz_id'] <= Quiz::count()){
            $quiz = Quiz::find($_SESSION['quiz_id']);
            
            return view('partials.dynamic_quiz_start')->with('quiz',$quiz);
        }
        else {
            $thisquiz = new Quizscore;
            $thisquiz->user_id = Auth::user()->id;
            $thisquiz->score =  $_SESSION['correct_attempt'];
            $thisquiz->save();
            $total_quiz_question = Quiz::count();
            return view('partials.dynamic_quiz_finalresult')->with('correct_attempt', $_SESSION['correct_attempt'])
            ->with('total_quiz_question',$total_quiz_question);
        }
       
       
    }

    public function checkResult(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'answer' => 'max:1',
        ]);
        $quiz = Quiz::find($_SESSION['quiz_id']);
        $correct_field = 'option'. $quiz->correct_option;
        // dd($correct_field);
        if($request->answer==$quiz->correct_option){
            
            $_SESSION['correct_attempt']++;
            return view('partials.dynamic_quiz_correct')->with('quiz',$quiz)->with('correct_field',$correct_field);
        }
        else return view('partials.dynamic_quiz_incorrect')->with('quiz',$quiz)->with('correct_field',$correct_field);
    }
}
