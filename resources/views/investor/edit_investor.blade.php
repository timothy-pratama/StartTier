@extends('header.master')

@section('navbar')
@include('navbar.investor')
@stop

@section('content')
<h1>{{$nama_investor}}</h1>

<div id="page-bgtop">
	<div id="page-bgbtm">
		<div class="jumbotron">
			<h3>Profil Perusahaan</h3>

			<form action="{{route('edit_profil_investor', array('nama_investor'=>$nama_investor))}}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama_perusahaan">Nama Perusahaan</label>
					<input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="{{$nama_investor}}">
				</div>
				<div class="form-group">
					<label for="alamat_perusahaan">Alamat Perusahaan</label>
					<textarea id="alamat_perusahaan" name="alamat_perusahaan" class="form-control" rows="10" style="resize: vertical">{{session('current_user')->alamat_perusahaan}}</textarea>
				</div>
				<div class="form-group">
					<label for="email_perusahaan">Email Perusahaan</label>
					<input type="email" class="form-control" id="email_perusahaan" name="email_perusahaan" value="{{session('current_user')->email}}">
				</div>
				<div class="form-group">
					<label for="logo_perusahaan">Logo Perusahaan</label>
					<input type="file" id="logo_perusahaan" name="logo_perusahaan">
				</div>
				<input type="submit" class="btn btn-default" value="Simpan"></button>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>

		</div>
		<div class="jumbotron">
			<h3>Detil Perusahaan</h3>

			<form action="{{route('edit_detil_investor', array('nama_investor'=>$nama_investor))}}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="deskripsi_perusahaan">Deskripsi Perusahaan</label>
					<textarea class="form-control" rows="10" id="deskripsi_perusahaan" name="deskripsi_perusahaan">{{session('current_user')->deskripsi_perusahaan}}</textarea>
				</div>
				<div class="form-group">
					<label for="full_logo_perusahaan">Logo Penuh Perusahaan</label>
					<input type="file" id="full_logo_perusahaan" name="full_logo_perusahaan">
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" class="btn btn-default" value="Simpan"></button>
			</form>

		</div>
	</div>
</div>
@stop