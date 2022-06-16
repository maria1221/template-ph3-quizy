<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index($id = 'zero') {
        $data = [
            'msg'=>'これはコントローラから渡されたメッセージです。',
        // return view(テンプレート, 配列) indexアクションのviewメソッドを呼び出すところで、必要な値をテンプレート側にわたす
        'id'=>$id
        ];
        return view('hello.index', $data);
    }
}