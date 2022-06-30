<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
    return view('quiz.index');
    }
    public function quiz($id) {
    return view('quiz.quiz', ['id'=>$id]);
    }
}
