<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');
Route::get('quiz', 'QuizController@index');
Route::get('/quiz/{id}', 'QuizController@quiz')->name('quiz');
Route::get('admin', 'QuizController@admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// 問題タイトルの追加
Route::get('/admin/big_question/add', 'QuizController@post');
// Route::post('/admin/big/question/add', 'QuizController@quizAdd');
Route::match(['get', 'post'], '/admin/big/question/add', 'QuizController@quizAdd');