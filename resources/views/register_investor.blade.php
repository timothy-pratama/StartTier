@extends('header.master')

@section('navbar')
@include('navbar.login')
@stop

@section('content')
<h3>Registrasi Investor</h3>

<form class="login-form" action="{{route('create_investor')}}" method="post">
  <div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required pattern="[a-zA-Z0-9_\-\.]{1,20}" title="Only alphanumerics . - and _ allowed (no spaces allowed)" />
    <div id="user_unavailable" style="color: red; display: none; margin-left: 1%; margin-top: 2%" >Username sudah digunakan</div>
    <div id="user_available" style="color: #4ED001; display: none; margin-left: 1%; margin-top: 2%" >Username dapat digunakan</div>
    <div class="loader"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="inputNamaPerusahaan">Nama Perusahaan</label>
    <input type="text" class="form-control" id="namaPerusahaan" placeholder="Nama Perusahaan" name="namaPerusahaan" required>
  </div>
  <div class="form-group">
    <label for="inputAlamatPerusahaan">Alamat Perusahaan</label>
    <textarea rows="4" class="form-control" id="alamatPerusahaan" placeholder="Alamat Perusahaan" name="alamatPerusahaan" required style="resize: vertical"></textarea>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email yang dapat dihubungi" name="email" required />
  </div>
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
  <input type="submit" class="btn btn-primary" value="Daftar" />
</form>

<script>
    $('#username').change(function () {
        $('.loader').show();
        $('#user_unavailable').hide();
        $('#user_available').hide();
        var username = $('#username').val();
        $.get("{{route('check_user')}}?username="+username, function(data) {
            $('.loader').hide();
            if(data == 'available')
            {
                $('#user_available').show();
                $('#user_unavailable').hide();

            }
            else
            {
                $('#user_unavailable').show();
                $('#user_available').hide();
            }
        });
    });
</script>

<script>
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
    $('#menu_beranda').removeClass();
</script>
@stop