@extends('header.master')

@section('navbar')
@include('navbar.login')
@stop

@section('content')
<h3>Login untuk menggunakan StartTier</h3>
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
  <input type="submit" class="btn btn-primary" value="Login" />

  <p style="margin: 10px 0 0 0; text-align: center">Daftar sebagai <a href="{{route('register_startup')}}"><b>startup</b></a> atau <a href="{{route('register_investor')}}"><b>investor</b></a></p>
</form>

@include('modal.succesful_register_modal')

@if(session('username'))
    <script>
        $('#succesful_register_modal_message').find('b').text('{{session('username')}}');
        $('#succesful_register_modal').modal('show');
    </script>
@endif

<script>
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
    $('#menu_beranda').removeClass();
</script>
@stop