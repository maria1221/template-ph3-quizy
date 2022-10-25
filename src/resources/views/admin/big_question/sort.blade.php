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
<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<!-- jQuery UI -->
<script
  src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"
  integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k="
  crossorigin="anonymous"></script>
  <script>
    $(function(){
      $('#sortable').sortable();
      $('#sortable').bind("sortstop", function(){
        $(this).find('[name="display_order"]').each(function(idx){
          $(this).val(idx + 1);
        })
      })
    });
  </script>
  
  <div id="sortable">
    @foreach($big_questions as $big_question)
    <div>
      <input type="hidden" name="display_order" value="{{$big_question->prefectures_name}}">
      {{$big_question->prefectures_name}}
    </div>
    @endforeach
  </div>
  

</body>
</html>