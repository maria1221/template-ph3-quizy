<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\BigQuestion;
use App\Question;
use App\Choice;


class QuizController extends Controller
{
    // クイズの一覧の画面を表示
    public function index() {
    // $big_questions = DB::select('select * from big_questions');
    // $big_questions = BigQuestion::all();
    $big_questions = BigQuestion::orderBy('order', 'asc')->get();
    return view('quiz.index', compact('big_questions'));
    // return view('quiz.index');
    }
    // クイズの画面を表示
    public function quiz(Request $request, $id) {
        $id = $request->route()->parameter('id');
        // $items = DB::select('select * from quiz where id = :id', $param);
        $big_questions = BigQuestion::where('id', $id)->get();
        // $big_questions = BigQuestion::where('order', $id)->get();
        $questions = Question::where('prefectures_id', $id)->get();

        // $choices = DB::select('select * from choices where prefectures_id = :id', $param);
        $choices = Choice::where('prefectures_id', $id)->get();
        return view('quiz.quiz', compact('big_questions', 'questions', 'choices'));
    }
    // ログイン
    public function login(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $items=Person::orderBy($sort, 'asc')
        ->simplePaginate(5);
        $param=['items'=>$items, 'sort'=>$sort, 'user'=>$user];
        return view('hello.index', $param);
    }
    public function admin() {
        // $big_questions = BigQuestion::all();
        $big_questions = BigQuestion::orderBy('order', 'asc')->get();

        return view('admin.admin', compact('big_questions'));
    }

    // クイズのタイトルの追加
    // 問題の追加 fromの値を取得し$paramに代入
    //アクションメソッドの追加
    public function post(Request $request) {
        return view('admin.big_question.add'); //viewsフォルダのpostファイルに$dataを渡しつつページ表示する
    }   
    public function quizAdd(Request $request) {
        // $param = [
        //     'title' => $request->title, //取得したいデータをinput要素のname属性
        // ];
        //DBに接続しデータを挿入する。第１パラメータにSQL文、第２に$paramを。
        // DB::insert('insert into big_questions (prefectures_name, created_at) values (:title, NOW())', $param);
        BigQuestion::create([
            'prefectures_name' => $request->title
        ]);
        // $big_questions = BigQuestion::all();
        $big_questions = BigQuestion::orderBy('order', 'asc')->get();

        return view('admin.admin', compact('big_questions'));
    }
    // 問題のタイトルの変更
    public function update(Request $request, $id) {
        $id = $request->route()->parameter('id');
        $big_question = BigQuestion::find($id);
        return view('admin.big_question.edit.id', compact('big_question'));
    }
    public function edit(Request $request)
    {
        BigQuestion::find($request->id)
        -> update(
            [
            'prefectures_name' => $request->prefecture_name
        ]);
        return redirect('admin');
    }

    // https://snome.jp/framework/laravel-user-edit2/
    // https://implist.dev/entries/0223f2a77cc411c99699585d42eee900


    // 問題のタイトルの削除
    public function move_delete(Request $request, $id) {
        $id = $request->route()->parameter('id');
        $big_question = BigQuestion::find($id);
        return view('admin.big_question.delete.id', compact('big_question'));
    }
    public function delete(Request $request)
    {
        BigQuestion::find($request->id)
        ->delete();
        return redirect('admin');
    }

    // 問題のタイトルの並び替え
    public function sort() { 
        //並び順、orderの昇順,登録日の降順
        // $big_questions = BigQuestion::all();
        $big_questions = BigQuestion::orderBy('order', 'asc')->get();

        return view('admin.big_question.sort', compact('big_questions'));
    }

    // 並び順が POST に格納されている場合は、並び順を変える
    public function sort_by(Request $request) {
        $result = $request->result;
        if ($result != NULL) {
  // データの id が「,」区切りで順番に格納されているデータを配列に変換する
            $ids = explode(",", $result);
        for ($i = 1; $i < count($ids); $i++) {
            $id = $ids[$i] + 0;
            BigQuestion::where('id', $id)
            ->update(['order'=> $i]);
            // $sql =  "UPDATE big_questions SET sort='{$i}' WHERE id='{$id}'";
            // mysql_query($sql);
        }
    }
    // ソート順にデータを取得する
    // BigQuestion::select('SELECT * FROM big_questions ORDER BY order');
    BigQuestion::orderBy('order', 'asc')->get();
    return redirect('admin');
    }

    // 設問のメンテナンス
    public function question_maintenance(Request $request, $id) {
        $id = $request->route()->parameter('id');
        $big_question = BigQuestion::find($id);
        $questions = Question::where('prefectures_id', $id)->get();       
        $choices = Choice::where('prefectures_id', $id)->where('answer', 1)->get();
        $question_id = Question::latest('id')->first(['id']);
        return view('admin.question.edit.id', compact('big_question', 'questions', 'choices', 'question_id'));
    }
    // 設問の画像を設定
    public function question_edit(Request $request) {
         // ディレクトリ名
        $dir = 'img';  
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);
        Question::find($request->question_id)
        -> update(
            [
            'image' => $file_name
            ]);
        Choice::where('question_id', $request->question_id)
        ->where('answer', 1)
        ->update(
            [
                'choice' => $request->question_name
            ]);
        return redirect('admin');
    }
    // 設問の追加
    public function question_add(Request $request){
         // ディレクトリ名
        $dir = 'img';  
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name); 
        // $choice_count = Choice::selectRaw('count(distinct question_id)')->get();  
        // $question_id = $choice_count + 1;     
        Question::create([
            'prefectures_id'=>$request->big_question_id,
            'image'=>$file_name,
        ]);
        $question_id = $request->question_id + 1;
        Choice::create([
            'choice' => $request->question_name,
            'prefectures_id'=>$request->big_question_id,
            'question_id' =>$question_id,
            'answer' => 1,
        ]);
        return redirect('admin');
    }

}
