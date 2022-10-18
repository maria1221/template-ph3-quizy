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
    @foreach($big_questions as $big_question)
      <p>{{$big_question->prefectures_name}}</p>
        <a href="/admin/edit">問題の編集</a>
        <a href="/admin/delete">問題の削除</a>
    @endforeach
  </div>
</body>
</html>