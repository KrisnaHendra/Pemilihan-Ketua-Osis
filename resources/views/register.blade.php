<form action="{{ url('register') }}" method="POST">
  {{ csrf_field() }}
  <input type="text" name="name" placeholder="name">
  <input type="text" name="username" placeholder="username">
  <input type="text" name="email" placeholder="email">
  <input type="text" name="password" placeholder="password">
  <input type="text" name="password_confirmation" placeholder="password">
  <button type="submit" name="button">Submit</button>
</form>
