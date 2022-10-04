<p>{{$message}}</p>
<form action="/quiz/auth" method="post">
<table>
  @csrf
  <tr><th>user_id: </th><td><input type="text" name="user_id"></td></tr>
  <tr><th>password: </th><td><input type="password" name="password"></td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
</table>
</form>