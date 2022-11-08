<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>選択肢のメンテナンス</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <h1>選択肢のメンテナンス</h1>
    <ul>
      @foreach($choices->where('question_id', $id) as $choice) 
        <li>{{$choice->choice}}</li>
      @endforeach
    </ul>
</body>
</html>