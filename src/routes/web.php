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

Route::get('/', function () {
    return view('welcome');
});
Route::get('quiz', 'QuizController@index');
// Route::get('quiz/admin', 'QuizController@quizzes')->name('quizzes');
Route::get('quiz/{id}', 'QuizController@quiz')->name('quiz');
// セッション
// Route::get('quiz/session', 'QuizController@ses_get');
// Route::get('quiz/session', 'QuizController@ses_put');
