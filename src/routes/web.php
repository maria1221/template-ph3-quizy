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
// Route::get('hello', function() {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
// });

// $html = <<<EOF
// <html>
// <head>
// <title>hello</title>
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color: #eee;
//     margin:-40px 0px -50px 0px; }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// Route::get('hello', function () use ($html) {
    // return $html;
// });

//必須パラメータ パラメータを指定しないでアクセスするとエラーを起こす
// Route::get('hello/{msg}', function ($msg) {
//     $html = <<<EOF
//     <html>
//     <head>
//         <title>hello</title>
//             <style>
//                 body {font-size:16pt; color:#999; }
//                 h1 { font-size:100pt; text-align:right; color: #eee;
//                     margin:-40px 0px -50px 0px; }
//             </style>
//     </head>
//     <body>
//         <h1>Hello</h1>
//         <p>{$msg}</p>
//         <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
// EOF;
//     return $html;
// });
// 任意パラメータ 任意に付けられるパラメータ。パラメータ名?
Route::get('hello/{msg?}', function ($msg='no message.') {
    $html = <<<EOF
    <html>
    <head>
        <title>hello</title>
            <style>
                body {font-size:16pt; color:#999; }
                h1 { font-size:100pt; text-align:right; color: #eee;
                    margin:-40px 0px -50px 0px; }
            </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
    </html>
EOF;
    return $html;
});