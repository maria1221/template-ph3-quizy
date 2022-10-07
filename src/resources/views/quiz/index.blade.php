<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クイズの一覧</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <ul>
    <li><a href=" {{ route('quiz', ['id' => 1])  }} ">ガチで東京の人しか解けない！＃東京の難読地名クイズ</a></li>
    <li><a href="  {{ route('quiz', ['id' => 2])  }}  ">広島県民なら解けて当然？＃広島県の難読地名クイズ</a></li>
  </ul>
</body>
</html>