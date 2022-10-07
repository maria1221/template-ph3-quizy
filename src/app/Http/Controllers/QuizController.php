<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    public function index() {
    return view('quiz.index');
    }
    // 問題のタイトル編集
    public function quizzes()
    {
        $quizzes = DB::select('select * from quiz');
        return view('quiz.admin', ['quizzes' => $quizzes]);
    }
    // 問題のタイトル編集
    // public function addTitle()
    // {

    // }

    public function quiz($id) {
        $param = ['id' => $id];
        $items = DB::select('select * from quiz where id = :id', $param);
        $choices = DB::select('select * from choices where prefectures_id = :id', $param);
        return view('quiz.quiz', compact('param', 'items', 'choices'));
    }

    // セッション
    public function ses_get(Request $request) 
    {
        $sesdata = $request->session()->get('msg');
        return view('quiz.session', ['session_data' => $sesdata]);
    }
    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('quiz.session');
    }

    // // ログイン
    // public function getAuth(Request $request)
    // {
    //     $param=['message' => 'ログインしてください。'];
    //     return view('quiz.auth', $param);
    // } 
    // public function postAuth(Request $request)
    // {
    //     $user_id = $request->user_id;
    //     $password = $request->password;
    //     if (Auth::attempt(['user_id' => $user_id, 'password' => $password])) {
    //         $msg = 'ログインしました。(' . Auth::user()->name . ')';
    //         // リダイレクタのintendedメソッドは、認証フィルターで引っかかる前にアクセスしようとしていたURLへ、ユーザーをリダイレクト
    //         // return redirect()->intended('quiz');
    //         return redirect()->intended('quiz/admin');
    //     } else {
    //         $msg = 'ログインに失敗しました。';
    //     return view('quiz.auth', ['message' => $msg]);
    //     }
    // }

}