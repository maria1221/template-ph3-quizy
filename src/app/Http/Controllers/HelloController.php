<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() { // 引数にrequestインスタンスを渡す
        return view('hello.index', ['msg'=>'']);
    }
    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }
}