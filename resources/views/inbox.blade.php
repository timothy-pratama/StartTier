@extends('header.master')

@section('navbar')
@if(isset($cookie))
    <?php
        $pengguna = \App\Pengguna::where('username',$cookie)->first();
        Session::put('current_user',$pengguna);
    ?>

    @if(strcmp(session('current_user')->tipe,'startup') == 0)
        @include('navbar.startup')
    @else
        @include('navbar.investor')
    @endif
@else
    @include('navbar.guest')
@endif
@include('email_style')
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2"></div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Aksi <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Tandai semua dibaca</a></li>
                    <li><a href="#">Hapus</a></li>
                </ul>
            </div>
            <div class="pull-right">
                <div class="btn-group btn-group-sm"></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button"><i class="glyphicon glyphicon-edit"></i> Compose</a>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Kotak Masuk<span class="badge pull-right" style="margin-top: 3px;">32</span></a></li>
                <li><a href="#">Kotak Keluar</a></li>
                <li><a href="#">Tempat Sampah</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Inbox</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="checkbox">
                                <label style="padding-top: 6px;">
                                    <input type="checkbox">
                                </label>
                            </div>
                            <span class="name" style="min-width: 120px; display: inline-block;">Mark Otto</span>
                            <span class="">Nice work on the lastest version</span>
                            <span class="badge" style="margin-top: 3px">12:10 AM</span>
                            <span class="pull-right"></span>
                        </a>
                        <a href="#" class="list-group-item">
                                <div class="checkbox">
                                    <label style="padding-top: 6px;">
                                        <input type="checkbox">
                                    </label>
                                </div>
                            <span class="name" style="min-width: 120px; display: inline-block;">Jason Markus</span>
                            <span class="">This is big title</span>
                            <span class="badge" style="margin-top: 3px">12:09 AM</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection