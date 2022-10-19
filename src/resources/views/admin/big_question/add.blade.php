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
    <h1>問題タイトルの追加</h1>
    <form method="POST" action="/admin/big_question/add"  enctype="multipart/form-data">
      @csrf
      @method('POST') 
      {{-- The POST method is not supported for this route. Supported methods: GET, HEAD. --}}
      <label for="title">問題タイトル</label>
      <input type="text" name="title" id="title">
      <input type="submit" value="追加">
    </form>
  </div>
</body>
</html>