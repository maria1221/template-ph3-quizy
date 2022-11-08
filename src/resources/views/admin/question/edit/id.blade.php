<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>設問のメンテナンス</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <h1>{{$big_question->prefectures_name}}の登録済みの設問</h1>
  <a href="/admin/question/sort/{{$big_question->id}}">説問の並び替え</a>
  @foreach($questions as $index => $question)
    <ul>
      @foreach($choices->where('question_id', $question->id) as $choice) 
        <a href="/admin/question/select/{{$question->id}}"">{{$choice->choice}}</a>
        <form action="/admin/question/edit" method="post" enctype="multipart/form-data">
          @csrf
          <label for="question_name">設問を変更</label>
          <input type="text" name="question_name" id="question_name">
          <label for="image">設問の画像を変更</label>
          <input type="file" id="image" name="image">
          <input type="hidden" name="question_id" value="{{$question->id}}">
          <input type="submit" value="設問を変更する">
        </form>
        <form action="/admin/question/delete" method="post">
          @csrf
          <input type="hidden" name="question_id" value="{{$question->id}}">
          <input type="submit" value="削除する">
        </form>
        <img class="question_img" src="{{ asset('img/' . $question->image) }}" alt="問いとなる地名の画像"/>
      @endforeach
    </ul>
  @endforeach

  <h1>設問の追加</h1>
  <form action="/admin/question/add" method="post"enctype="multipart/form-data" enctype="multipart/form-data">
    @csrf
    <label for="question_name">設問の名前</label>
    <input id="question_name" type="text" name="question_name">
    <label for="image">設問の画像を設定</label>
    <input type="file" id="image" name="image">
    <input type="hidden" name="question_id" value="{{$question_id->id}}">
    <input type="hidden" name="big_question_id" value="{{$big_question->id}}">
    <input type="submit" value="設問を追加する">
  </form>

</body>
</html>