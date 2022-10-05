<html>
<head>
  <title>クイズ</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  {{-- 問題タイトルをメンテナンスする画面 --}}
  <h1>登録済みの問題</h1>
  <ul>
  @foreach ($quiz_titles as $key => $quiz_title) 
    <li>
      {{$quiz_title->choice}}
    </li>
  @endforeach
  </ul>
</body>
</html>