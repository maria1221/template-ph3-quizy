<!DOCTYPE html>
<html  lang="ja">
<head>
  <meta charset="UTF-8">
  <title>admin画面</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  {{-- 問題タイトルをメンテナンスする画面 --}}
  <h1>登録済みの問題</h1>
  {{-- <form action=""></form> --}}
  @foreach ($quizzes as $key => $quiz) 
    <li>
      <a href="/quiz/editquiz/{{$quiz->id}}">{{$quiz->prefectures_name}}</a>
    </li>
    <div>
      <a href="/quiz/edittitle/{{$quiz->id}}">問題タイトルの変更</a>
      <a href="/quiz/deletetitle{{$quiz->id}}">問題の削除</a>
    </div>
  @endforeach
    <div>
      <a href="/quiz/addtitle">問題タイトルの追加</a>
      <a href="/quiz/editnumber">問題タイトルの順序の変更</a>
    </div>
  {{-- </>
  <h1>問題タイトルの編集</h1>
  <h2>問題タイトルの追加</h2>
  <form action="/quiz/admin" method="POST">
    <table>
      @csrf
      <tr><th>問題のタイトル </th><td><input type="text" name="add_title"></td></tr>
      <tr><th></th><td><input type="submit" value="追加"></td></tr>
    </table>
  </form> --}}
</body>
</html>