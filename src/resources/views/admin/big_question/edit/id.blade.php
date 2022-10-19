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
    {{-- <h2>{{$big_question->prefectures_name}}</h2> --}}
    <form method="POST" action="/admin/big_question\edit">
      @csrf
      @method('PUT') 
      {{-- <input type="hidden" name="prefecture_id" value="{{$big_question->id}}"> --}}
      <label for="update_title">問題タイトルの変更</label>
      {{-- <input  id="update_title" type="text" name="prefecture_name" value="{{ $big_question->prefecture_name}}"> --}}
      <input type="submit" value="変更">
    </form>
  </div>
</body>
</html>