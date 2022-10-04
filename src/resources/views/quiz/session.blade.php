<p>{{$session_data}}</p>
<form action="/quiz/session" method ="post">
@csrf
<input type="text" name="input">
<input type="submit" value="send">
</form>
