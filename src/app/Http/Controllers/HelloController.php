<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) { // 引数にrequestインスタンスを渡す
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです。',
            //テンプレートに渡すidの値は$request->idとして取り出す。このidがクエリー文字 
            'id'=>$request->id
        ];
        return view('hello.index', $data);
    }
}