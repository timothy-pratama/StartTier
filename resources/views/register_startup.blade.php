@extends('header.master')

@section('navbar')
@include('navbar.login')
@stop

@section('content')
<h3>Registrasi Startup</h3>

<form class="login-form">
  <div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="inputNamaStartup">Nama Startup</label>
    <input type="text" class="form-control" id="namaStartup" placeholder="Nama Startup" name="namaStartup" required>
  </div>
  <div class="form-group">
    <label for="inputAlamatStartup">Alamat Startup</label>
    <input type="text" class="form-control" id="alamatStartup" placeholder="Alamat Startup" name="alamatStartup" required>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email yang dapat dihubungi" name="email" required />
  </div>
  <input type="submit" class="btn btn-primary" value="Daftar" />
</form>

<script>
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
    $('#menu_beranda').removeClass();
</script>
@stop