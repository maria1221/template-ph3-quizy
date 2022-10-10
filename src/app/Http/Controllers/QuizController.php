<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;

use App\BigQuestion;
use App\Question;
use App\Choice;


class QuizController extends Controller
{
    public function index() {
    // $big_questions = DB::select('select * from big_questions');
    $big_questions = BigQuestion::all();
    return view('quiz.index', compact('big_questions'));
    // return view('quiz.index');
    }
    public function quiz(Request $request, $id) {
        $id = $request->route()->parameter('id');
        // $items = DB::select('select * from quiz where id = :id', $param);
        $big_questions = BigQuestion::where('id', $id)->get();
        $questions = Question::where('prefectures_id', $id)->get();

        // $choices = DB::select('select * from choices where prefectures_id = :id', $param);
        $choices = Choice::where('prefectures_id', $id)->get();
        return view('quiz.quiz', compact('big_questions', 'questions', 'choices'));
    }

}