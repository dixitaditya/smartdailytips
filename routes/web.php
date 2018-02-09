<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/article', function () {
    return view('article');
});

Route::get('/category', function () {
    return view('category');
})->name('category');

// Route::post('/subscribe', function () {
//     return 'subscribed';
// })->name('subscribe');

Route::get('/signup','Auth\RegisterController@getSignupForm')->name('signupForm')->middleware('guest');
Route::get('/login','Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
Route::post('/signup','Auth\RegisterController@register')->name('signup');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/subscribeonly','SubscriptionController@subscribeOnly')->name('subscribeonly');
Route::post('/subscribewithcategories','SubscriptionController@subscribeWithCategories')->name('subscribewithcategories');
Route::post('/ajaxsubscribewithcategories','SubscriptionController@ajaxsubscribeWithCategories')->name('ajaxsubscribewithcategories');
Route::post('/checkresult','QuizController@checkResult')->name('checkresult');
Route::get('/nextquiz','QuizController@getNextQuiz')->name('nextquiz');

Route::get('/mycategory', function () {
    return Redirect::to('https://medium.com/new-york-times-magazine/what-teenagers-are-learning-from-online-porn-95c89176e070');
})->name('category')->middleware('auth');



/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
| Test routes delete in production
|
*/


Route::get('/quizrand','QuizController@getRandomQuiz')->name('quizrand');
Route::get('/quizline','QuizController@getQuizInOrder')->name('quizline');
Route::get('/first','QuizController@firstfetch')->name('firstfetch');


Route::post('/signup','Auth\RegisterController@register')->name('signup');

Route::get('/substest','SubscriptionController@substest')->name('substest');
Route::post('/postsubstest','SubscriptionController@postsubstest')->name('postsubstest');


Route::get('/incorrect', function () {
    return view('partials.correct');
});

Route::get('/correct', function () {
    return view('partials.correct');
});

Route::get('/modal', function () {
    return view('partials.modal');
});

Route::get('/quizflow1', function () {
    return view('partials.quiz_flow1');
});

Route::get('/quizflow2', function () {
    return view('partials.quiz_flow2');
});
Route::get('/quizflow3', function () {
    return view('partials.quiz_flow3');
});

Route::get('/subscribe', function () {
    return view('partials.subscribe');
});

Route::get('/subscribeflow', function () {
    return view('partials.subscribe_flow');
});

Route::get('/sweep-signup', function () {
    return view('partials.sweep-signup');
});

Route::get('/thankyou1', function () {
    return view('partials.thankyou1');
});

/*
|--------------------------------------------------------------------------
| base Routes
|--------------------------------------------------------------------------
|
| Base routes
|
*/
Route::get('/home', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Make a home controller route to send the base link
|--------------------------------------------------------------------------
|
| and set $_SESSION['quiz_id']=1 and fetch the quiz
|
*/
Route::get('/','HomeController@index')->name('home');

