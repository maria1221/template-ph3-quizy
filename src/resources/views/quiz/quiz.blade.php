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
  <div class="question" data-quiz= `${index}`>
    <h2 class="underline"> 
        {{$index+1  . ". この地名はなんて読む？"}}
    </h2> 
    <img class="question_img" src="{{ asset('img/' . $question->image) }}" alt="問いとなる地名の画像"/>
    <ul>
      {{-- choicesテーブルのquestion_idが問題のidと同じであればいい
        →問題のid=questionsテーブルのid --}}
      @foreach($choices->where('question_id', $question->id) as $index =>$choice) 
        <li class="choice" data-answer="{{$choice->answer}}">
          {{$choice->choice}}/{{$choice->answer}}
        </li>
      @endforeach
    </ul>
    <div id="answerBox" class="answer_box hidden">
      <p class="answer_title"></p>
      <p class="answer_text"></p>
    </div>
  </div>
  @endforeach

<script>
// 問題全て
let allQuiz =  document.querySelectorAll('.question');


allQuiz.forEach(quiz => {
  // 選択肢全て
  const answers = quiz.querySelectorAll('.choice');
  const selectedQuiz = Number(quiz.getAttribute('data-quiz'));
  // 正解は「○○」の箱
  const answerBox = quiz.querySelectorAll('.answer_box');
  const answerTitle = quiz.querySelectorAll('.answer_title');
  const answerText = quiz.querySelectorAll('.answer_text');

  answers.forEach(answer=> {
    answer.addEventListener('click', () => {
      // Number()を使わないと、ifが使えない
      const selectedAnswerNumber = Number(answer.getAttribute('data-answer'));
      console.log(selectedAnswerNumber);
      if(selectedAnswerNumber === 1) {
        answer.classList.add('correct');
      } else {
        answer.classList.add('incorrect');
      }
    })
  })
// Number」オブジェクト→値が数値であるかを検証したり文字列を数値に変換するなど
// Number( 値 )  数値に変換したい値を引数に指定

});

// let choices = document.getElementsByClassName('choice');
// HTMLCollection→配列ではないので、foreachが使えない
// function buttonClick(choice) {
//   console.log('aa');
// }
//   Array.prototype.forEach.call(choices, function(choice, index){
//   console.log(choice);
//   choice.addEventListner('click', function () {
//       answerBox.classList.remove('hidden');
//       let answerText = document.createElement("p");
//       if (choice[index]['answer'] = 1) {
//         answerText.innerText = "正解！";
//         answerText.classList.add("answerText");
//         answerBox.appendChild(answerText);
//         let correctText = document.createElement("p");
//         correctText.innerText = `正解は「 choice[0] 」です！`;
//         answerBox.appendChild(correctText);
//       }
//     })
// });




</script>

</body>
</html>