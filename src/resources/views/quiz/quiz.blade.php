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
    @foreach($big_questions as $big_question)  
        {{$big_question->prefectures_name}}
      の人しか解けない！＃
        {{$big_question->prefectures_name}}
    @endforeach
    の難読地名クイズ
  </h1>
  @foreach($questions as $index =>$question)
  <div class="question">
    <h2 class="underline"> 
        {{$index+1  . ". この地名はなんて読む？"}}
    </h2> 
    <img class="question_img" src="{{ asset('img/' . $question->image) }}" alt="問いとなる地名の画像"/>
    <ul>
      {{-- choicesテーブルのquestion_idが問題のidと同じであればいい
        →問題のid=questionsテーブルのid --}}
      @foreach($choices->where('question_id', $question->id) as $choice) 
        <li id="correct" class="choice" >
          {{$choice->choice}}
        </li>
      @endforeach
    </ul>
  </div>
  @endforeach


  
</body>
</html>