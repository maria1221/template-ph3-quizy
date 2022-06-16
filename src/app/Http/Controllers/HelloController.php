<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() { // 引数にrequestインスタンスを渡す
        $data = [
            'msg'=>'お名前入力してください。',
        ];
        return view('hello.index', $data);
    }
    public function post(Request $request)
    {
        $msg = $request->msg; //フォームの内容をこのように取りだす→フォームで送信された値は全てnameのプロパティとして取り出せるようになっている
        $data = [
            'msg'=>'こんにちは、' . $msg .'さん',
        ];
        return view('hello.index', $data);
    }
}