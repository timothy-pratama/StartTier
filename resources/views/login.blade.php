@extends('header.master')

@section('navbar')
@include('navbar.login')
@stop

@section('content')
<h3>Login untuk menggunakan StartTier</h3>
<form class="login-form" method="post" action="{{route('user_login')}}">
  <div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required pattern="[a-zA-Z0-9_]{1,20}" title="Only alphanumerics and underscore allowed (no spaces allowed), 20 characters max.">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" id="rememberMe" name="rememberMe"> Tetap Login
    </label>
  </div>
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <input type="submit" class="btn btn-primary" value="Login" />

  <p style="margin: 10px 0 0 0; text-align: center">Daftar sebagai <a href="{{route('register_startup')}}"><b>startup</b></a> atau <a href="{{route('register_investor')}}"><b>investor</b></a></p>
</form>

@include('modal.succesful_register_modal')
@include('modal.basic_modal')

@if(session('username'))
    <script>
        $('#succesful_register_modal_message').find('b').text('{{session('username')}}');
        $('#succesful_register_modal').modal('show');
    </script>
@endif

@if(session('login_error'))
    <script>
        $('#basic_modal_title').text('Gagal Login');
        $('#basic_modal_body').find('p').text('{{session('login_error')}}');
        $('#basic_modal').modal('show');
    </script>
@endif

<script>
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
    $('#menu_beranda').removeClass();
</script>
@stop