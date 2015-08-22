@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>{{$nama_startup}}</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div class="jumbotron">
            <h3>Profil Startup</h3>

            <form action="{{route('edit_profil_startup', ['nama_startup'=>$nama_startup])}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama_startup">Nama Startup</label>
                    <input type="text" class="form-control" id="nama_startup" name="nama_startup" value="{{$nama_startup}}" required>
                </div>
                <div class="form-group">
                    <label for="alamat_startup">Alamat Startup</label>
                    <textarea class="form-control" rows="4" id="alamat_startup" name="alamat_startup" style="resize: vertical" required>{{session('current_user')->alamat_perusahaan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="email_startup">Email Startup</label>
                    <input type="email" class="form-control" id="email_startup" name="email_startup" value="{{session('current_user')->email}}" required>
                </div>
                <div class="form-group">
                    <label for="video_startup">Video Startup</label>
                    <input type="text" class="form-control" id="video_startup" name="video_startup" value="{{session('current_user')->video}}" required>
                </div>
                <div class="form-group">
                    <label for="logo_startup">Logo Startup</label>
                    <input type="file" id="logo_startup" name="logo_startup" accept="image/*">
                </div>
                <input type="submit" class="btn btn-default" value="Simpan">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

        </div>
        <div class="jumbotron">
            <h3>Detil Startup</h3>

            <form action="{{route('edit_detil_startup', array('nama_startup'=>$nama_startup))}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="deskripsi_startup">Deskripsi Startup</label>
                    <textarea class="form-control" rows="10" id="deskripsi_startup" name="deskripsi_startup" style="resize: vertical" required>{{session('current_user')->deskripsi_perusahaan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="full_logo_startup">Logo Penuh Startup</label>
                    <input type="file" id="full_logo_startup" name="full_logo_startup" accept="image/*">
                </div>
                <input type="submit" class="btn btn-default" value="Simpan">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

        </div>
    </div>
</div>
@stop