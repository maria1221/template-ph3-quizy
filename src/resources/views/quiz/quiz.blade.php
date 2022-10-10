<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>クイズ</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>


<h1>ガチで
@foreach($questions as $question)  
@php
print_r($question->prefectures_name);
@endphp
@endforeach
の人しか解けない！＃
@php
print_r($question->prefectures_name);
@endphp
の難読地名クイズ
</h1>
@foreach($questions as $index =>$question)
<h2 class="underline"> 
  @php 
  echo $index+1  . ". この地名はなんて読む？"; 
  @endphp 
</h2> 
<img class="question_img" src="{{ asset('img/' . $question->prefectures_id . '-' .  ($index+1)
.
'.png') }}" alt="問いとなる地名の画像"/>
@endforeach
</ul>
</body>
</html>