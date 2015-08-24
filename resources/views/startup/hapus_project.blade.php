@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')

<?php
    $projects = session('current_user')->projects;
    $i = 1;
?>

<h1>Hapus Project</h1>

<div class="container-fluid">
    <div class="row delete_project" style="margin-top: 5%; margin-left: 25%; margin-right: 25%; padding-left: 3%; padding-right: 3%">
        @if($projects->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Judul Project</th>
                        <th style="text-align: center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($projects as $project)
                            <tr id="btn-{{$project->id_project}}">
                                <th scope="row" style="text-align: center; display: table-cell; vertical-align: middle">{{$i++}}</th>
                                <td style="display: table-cell; vertical-align: middle">{{$project->project_title}}</td>
                                <td style="text-align: center">
                                    <button class="btn btn-danger" onclick="confirmHapus({{$project->id_project}})">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        @else
            <p style="text-align: center;">Tidak ada project yang terdaftar</p>
        @endif
    </div>
</div>

@include('modal.delete_project_confirmation_modal')

<script>
    var id;

    function confirmHapus(id)
    {
        this.id = id;
        $('#delete_project_confirmation_modal').modal('show');
    }

    $('#btn-hapus').click(function () {
        hapus();
    })

    function hapus()
    {
        $('#delete_project_confirmation_modal').modal('hide');
        var url = "{{route('startup_delete_project')}}?id="+id+"&token="+'{{Hash::make(session('current_user')->username . session('current_user')->password)}}';
        $.get(url, function(data) {
            $('#btn-'+id).hide("slow", function(){
                $('$btn-'+id).remove();
            });
        });
    }

</script>

@stop