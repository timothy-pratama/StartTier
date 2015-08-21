@extends('header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>{{$nama_startup}}</h1>

<div id="page-bgtop">
	<div id="page-bgbtm">
		<div class="jumbotron change_password" style="margin-left: auto; margin-right: auto; width: 50%;">
			<h3>Ganti Password</h3>
			<form action="{{route('startup_update_password')}}" method="post" id="form-ganti-password">
				<div class="form-group">
					<label for="password_lama">Password lama</label>
					<input placeholder="Masukkan password lama Anda" class="form-control" type="password" id="old_password" name="old_password" required />
				</div>
				<div class="form-group">
					<label for="password_baru">Password baru</label>
					<input placeholder="Masukkan password baru Anda" class="form-control" type="password" id="new_password" name="new_password" />
				</div>
				<div class="password-tidak-sama" style="margin-bottom: 1%; margin-top: -2%; color: red; display: none">* password tidak sama</div>
				<div class="form-group">
                    <label for="konfirmasi_password_baru">Konfirmasi password baru</label>
                    <input placeholder="Masukkan ulang password baru Anda" class="form-control" type="password" id="new_password_confirmation" name="new_password_confirmation" />
                </div>
                <div class="password-tidak-sama" style="margin-bottom: 1%; margin-top: -2%; color: red; display: none">* password tidak sama</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="btn btn-default" value="Simpan"></button>
			</form>
		</div>
	</div>
</div>

<script>
    $('#form-ganti-password').submit(function () {
        if($('#new_password').val() === $('#new_password_confirmation').val())
        {
            return true;
        }
        else
        {
            $('.password-tidak-sama').show(200);
            return false;
        }
    });
</script>

@include('modal.basic_modal')

@if(session('error_message'))
<script>
    $('#basic_modal_title').text('Ganti Password Gagal');
    $('#basic_modal_body').find('p').text('Password yang Anda masukkan salah');
    $('#basic_modal').modal('show');
</script>
@endif

@stop