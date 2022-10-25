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
        {{-- <a href="/admin/big_question/update">問題タイトルの変更</a> --}}
        {{-- route()メソッドの第二引数でモデルデータを指定→自動的にルーティングに沿った形でデータのidがURLにうめこまれる --}}
        {{-- <a href="{{ route('big_question.update', ['id' => $big_question->id]) }}">問題タイトルの変更</a> --}}
        {{-- <a href="{{ route('admin.big_question.edit', ['id' => $big_question->id]) }}">問題タイトルの変更</a> --}}
        {{-- <a href="admin/big_question/edit/{['id' => $big_question->id]}">問題タイトルの変更</a> --}}
        <a href="admin/big_question/edit/{{ $big_question->id }}">問題タイトルの変更</a>
        <a href="/admin/delete">問題の削除</a>
    @endforeach
  </div>
</body>
</html>