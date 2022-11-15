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
      @foreach ($correct_choices->where('question_id', $question->id) as $correct_choice)
        @php
        $correct_choice= $correct_choice->choice;
        @endphp
      {{-- choicesテーブルのquestion_idが問題のidと同じであればいい
        →問題のid=questionsテーブルのid --}}
        @foreach($choices->where('question_id', $question->id) as $index =>$choice) 
          <button class="choice" data-answer="{{$choice->answer}}" data-correct ="{{$correct_choice}}">
            {{$choice->choice}}
          </button>
        @endforeach
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
// 選択肢のbuttonタグにdisabledを付与
// disabledは「使用禁止」
const setDisabled = answers => {
    answers.forEach(answer => {
      answer.disabled = true;
    })
  }

allQuiz.forEach(quiz => {
  let correctChoices = @json($correct_choice);
  // 選択肢全て
  const answers = quiz.querySelectorAll('.choice');
  const selectedQuiz = Number(quiz.getAttribute('data-quiz'));
  // 正解は「○○」の箱
  const answerBox = quiz.querySelectorAll('.answer_box');
  const answerTitle = quiz.querySelectorAll('.answer_title');
  const answerText = quiz.querySelectorAll('.answer_text');
  // Nodelistだからforeachを使える
  answers.forEach(answer=> {
    const correctChoice = answer.getAttribute('data-correct');
    answer.addEventListener('click', () => {

      // 全てのボタンを非活性化
      setDisabled(answers);
      // answerboxを表示
      // console.log(answerText[0]);
      answerBox[0].classList.remove('hidden');
            // Number()を使わないと、ifが使えない
      const selectedAnswerNumber = Number(answer.getAttribute('data-answer'));
      const correctAnswer = answer.getAttribute('data-correct'); 
      console.log(correctAnswer);
      // setDisabled(answer);
      if(selectedAnswerNumber === 1) {
        answer.classList.add('correct');
        answerTitle[0].innerText = '正解！';
      } else {
        answer.classList.add('incorrect');
        answerTitle[0].innerText = "不正解"
        // answerText[0].innerText = "正解は" ;

      };
      // answerText[0].innerText = "正解は" . correctChoices;
      answerText[0].innerText = `正解は${correctChoice}`;

    })
  })
  
  
});
// Number」オブジェクト→値が数値であるかを検証したり文字列を数値に変換するなど
// Number( 値 )  数値に変換したい値を引数に指定


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