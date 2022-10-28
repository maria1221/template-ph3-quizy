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
Route::post('/admin/big_question/add', 'QuizController@quizAdd');
// 問題のタイトルの更新
Route::get('/admin/big_question/edit/{id}', 'QuizController@update');
Route::put('/admin/big_question/edit', 'QuizController@edit');
// 問題のタイトルの削除
Route::get('/admin/big_question/delete/{id}', 'QuizController@move_delete');
Route::delete('/admin/big_question/delete', 'QuizController@delete');
// 問題のタイトルの並び替え
Route::get('/admin/big_question/sort', 'QuizController@sort');
Route::post('/admin/big_question/sort_by', 'QuizController@sort_by');
// 設問のメンテナンス
Route::get('/admin/question/edit/{id}', 'QuizController@question_edit');

// フロントで昇順降順を変えられるか？→今postされた準。じゃなくって、高輪、亀戸の順じゃなくて、亀戸高輪の順にできる。