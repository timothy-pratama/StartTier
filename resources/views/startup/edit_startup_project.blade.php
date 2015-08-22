@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>{{$nama_project}}</h1>
<?php $project = \App\Project::find($id_project); ?>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div class="jumbotron">
            <h3>Detail Project</h3>
            <form action="{{route('startup_update_project')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul_project">Judul Project</label>
                    <input type="text" class="form-control" name="project_title" id="project_title" required value="{{$project->project_title}}" />
                </div>
                <div class="form-group">
                    <label for="deskripsi_project">Deskripsi Project</label>
                    <textarea class="form-control" rows="10" style="resize: vertical" id="project_description" name="project_description" required>{{$project->project_description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar_project">Gambar Project</label>
                    <input type="file" id="gambar_project" name="gambar_project" accept="image/*">
                </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_project" value="{{$id_project}}" />
                <input type="submit" class="btn btn-default" value="Simpan" />
            </form>
        </div>
    </div>
</div>
@stop