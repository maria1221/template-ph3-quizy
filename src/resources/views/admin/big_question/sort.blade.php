<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>問題タイトルの順序変更</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <form action="/admin/big_question/sort_by" method="post">
    @csrf
    @method('post')
  <ul class="sortable">
     @foreach($big_questions as $big_question)
      <li id="{{$big_question->id}}">{{$big_question->prefectures_name}}</li>
     @endforeach
   </ul>
  <input type="hidden" id="list-ids" name="list_ids" />
  <button id="submit">更新</button>
</form>

<script>
  $(function() {
      $(".sortable").sortable();
      $(".sortable").disableSelection();
      $("#submit").click(function() {
          var listIds = $(".sortable").sortable("toArray");
          $("#list-ids").val(listIds);
          $("form").submit();
      });
  });
</script>
</body>
</html>

