<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>問題タイトルの追加</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <div>
    <p>問題タイトルの追加</p>
    <form action="/admin/big_question/add" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="title">問題タイトル</label>
      <input type="text" name="title" id="title">
      <input type="submit" value="追加">
    </form>
  </div>
</body>
</html>