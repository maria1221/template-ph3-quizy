<html>
<head>
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