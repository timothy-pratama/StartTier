@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>Buat Project Baru</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div class="jumbotron">
            <h3>Detail Project</h3>
            <form action="{{route('startup_new_project')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul_project">Judul Project</label>
                    <input type="text" class="form-control" name="project_title" id="project_title" required value="" />
                </div>
                <div class="form-group">
                    <label for="deskripsi_project">Deskripsi Project</label>
                    <textarea class="form-control" rows="10" style="resize: vertical" id="project_description" name="project_description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar_project">Gambar Project</label>
                    <input type="file" id="gambar_project" name="gambar_project" accept="image/*" required>
                </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="submit" class="btn btn-default" value="Simpan" />
            </form>
        </div>
    </div>
</div>
@stop