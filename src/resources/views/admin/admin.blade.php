<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>admin</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <div>
    <a href="/admin/big_question/add">問題タイトルの追加</a>
    <a href="/admin/big_question/sort">問題タイトルの順序の変更</a>
    @foreach($big_questions as $big_question)
      <div>
        <a href="/admin/question/edit/{{$big_question->id}}">{{ $big_question->prefectures_name }}</a>
        <a href="admin/big_question/edit/{{ $big_question->id }}">問題タイトルの変更</a>
        <a href="/admin/big_question/delete/{{$big_question->id}}">問題の削除</a>  
      </div>
    @endforeach
  </div>
</body>
</html>