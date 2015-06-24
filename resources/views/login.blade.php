@extends('header.home')
@section('content')

<form class="login-form">
  <div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" id="rememberMe" name="rememberMe"> Remember me
    </label>
  </div>
  <input type="submit" class="btn btn-default" value="Login" />

  <p style="margin: 10px 0 0 0; text-align: center">Belum punya akun? <a href="#">Daftar di sini</a></p>
</form>
@stop