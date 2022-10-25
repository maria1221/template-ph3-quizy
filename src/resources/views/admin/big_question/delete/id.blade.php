<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>問題タイトルの削除</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <div>
    <h2>{{$big_question->prefectures_name}}</h2>
    <form method="POST" action="/admin/big_question/delete">
      @csrf
      @method('DELETE') 
      <label for="delete_title">問題の削除</label>
      <input type="hidden" name="id"  value="{{ $big_question->id }}">{{-- どの問題タイトルを削除するべきなのかを判断 --}}
      {{-- <input  id="delete_title" type="text" name="prefecture_name" value="{{ $big_question->prefectures_name}}"> --}}
      <input type="submit" value="削除">
    </form>
  </div>
</body>
</html>