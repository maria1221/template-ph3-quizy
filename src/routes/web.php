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


// ログイン
Route::get('quiz/auth', 'QuizController@getAuth');
Route::post('quiz/auth', 'QuizController@postAuth');

Route::get('/', function () {
    return view('welcome');
});
Route::get('quiz', 'QuizController@index');
Route::get('quiz/admin', 'QuizController@quizTitles')->name('quizTitles');
Route::get('quiz/{id}', 'QuizController@quiz')->name('quiz');
// セッション
Route::get('quiz/session', 'QuizController@ses_get');
Route::get('quiz/session', 'QuizController@ses_put');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
