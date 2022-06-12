<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// HelloControllerクラスの中にIndexというメソッドを追加。アクションとして使われるメソッド
// アクションメソッド 引数を持たないメソッドとして用意。returnでHTMLのソースコードwpぁ絵師　
class HelloController extends Controller
{
    public function index() {
        return <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1{ font-size:100px; text-align:right; color:#eee;
margin: -40px 0px -50px 0px; }
</style>
<body>
    <h1>Index</h1>
    <p>これは、Helloコントローラーのindexアクションです。</p>
</body>
</head>
</html>
EOF;
}
}