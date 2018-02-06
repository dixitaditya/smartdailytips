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

Route::get('/signup','Auth\RegisterController@getSignupForm')->name('signupForm');
Route::post('/signup','Auth\RegisterController@register')->name('signup');
Route::post('/logout','Auth\LoginController@logout')->name('logout');



/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
| Test routes delete in production
|
*/
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
Route::get('/', function () {
    return view('welcome');
});
