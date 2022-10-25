<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>問題タイトルの変更</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <div>
    <form method="POST" action="/admin/big_question/edit">
      @csrf
      @method('PUT') 
      <label for="update_title">問題タイトルの変更</label>
      <input type="hidden" name="id"  value="{{ $big_question->id }}">      {{-- どの問題タイトルを更新するべきなのかを判断 --}}
      <input  id="update_title" type="text" name="prefecture_name" value="{{ $big_question->prefectures_name}}">
      <input type="submit" value="変更">
    </form>
  </div>
</body>
</html>