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
// helloと表示する
Route::get('hello', function() {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});