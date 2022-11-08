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
      @foreach($choices->where('question_id', $id) as $choice)
      <form action="/admin/question/select/edit" method="post" enctype="multipart/form-data">
          @csrf
          <input type="text" name="select_name" id="select_name" value="{{$choice->choice}}">
          <select name="answer" id="answer">
            <option value="1">正解</option>
            <option value="0">不正解</option>  
          </select>
          <input type="hidden" name="select_id" value="{{$choice->id}}">
          <input type="submit" value="変更する">
        </form>
      @endforeach
</body>
</html>