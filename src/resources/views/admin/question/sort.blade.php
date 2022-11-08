<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>設問の並び替え</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
<form action="/admin/question/sort_by" method="post">
  @csrf
  @method('post')
  <ul id="sortable">
    @foreach($questions as $index => $question)
      @foreach($choices->where('question_id', $question->id) as $choice) 
        <li id="{{$choice->question_id}}"</li>{{$choice->choice}}</li>
      @endforeach
    @endforeach
  </ul>
  <input type="hidden" id="result" name="result" />
  <input type="submit" id="submit" value="並び順を保存する" />
</form>
<script>
  $(function() {
    // ソート可能にする
    $("#sortable").sortable();
    $("#sortable").disableSelection();
    $("#submit").click(function() {
      // result に並び順を格納する
      var result = $("#sortable").sortable("toArray");
      $("#result").val(result);
      $("form").submit();
    });
  });
  </script>
</body>
</html>