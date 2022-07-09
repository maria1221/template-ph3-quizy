<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
    return view('quiz.index');
    }
    public function quiz($id) {
        $choices = [  
            1 => [  
                ["たかなわ","こうわ","たかわ"],
                ["かめいど","かめど","かめと"],
                ["こうじまち","おかとまち","かゆまち"],
            ],
            2 => [
                ["むかいなだ", "むこうひら", "むきひら"],
                ["みつぎ", "おしらべ", "みよし"],
                ["きやま", "ぎんざん", "かなやま"],
            ]
    ];
    return view('quiz.quiz',  compact('id', "choices['$id']"), );
    }

}
