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

// トップページにアクセスした時の処理
// Route::get(アドレス, 処理); getメソッドでアドレスと処理を割り当てる
// view(テンプレート名) 指定したテンプレートファイル(viewsフォルダの中にある)をレンダリングして返す
Route::get('/', function () {
    return view('welcome');
});

// 呼び出すコントローラー@アクション名
// Route::get('hello', 'HelloController@index');
// Route::get('hello/{id?}/{pass?}', 'HelloController@index');
// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');
Route::get('hello', 'HelloController');