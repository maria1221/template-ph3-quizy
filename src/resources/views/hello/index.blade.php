<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ログイン</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  @if(Auth::check())
  <p>USER:{{$user->name . '(' $user->email . '('}}</p>
  @else
  <p>※ログインしていません(<a href="/login">ログイン</a> | <a href="/register">登録</a>)</p>
</body>
</html>