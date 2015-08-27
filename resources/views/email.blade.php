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

@include('modal.compose_message_modal')

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2"></div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Aksi <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
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
            <a href="#" id="compose-message" class="btn btn-danger btn-sm btn-block" role="button"><i class="glyphicon glyphicon-edit"></i> Buat Pesan</a>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li id="inbox"><a href="{{route('get_inbox',['nama_perusahaan'=>session('current_user')->nama_perusahaan])}}">Kotak Masuk<span class="badge pull-right" style="margin-top: 3px;">32</span></a></li>
                <li id="outbox"><a href="{{route('get_outbox',['nama_perusahaan'=>session('current_user')->nama_perusahaan])}}">Kotak Keluar</a></li>
                <li id="trashbox"><a href="{{route('get_trashbox',['nama_perusahaan'=>session('current_user')->nama_perusahaan])}}">Tempat Sampah</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group-item">
                        <div class="email-title"><b>[Email Title]</b></div>
                        <hr>
                        <div class="email-sender"><b>[Pengirim]</b>&lt;email pengirim&gt;</div>
                        <hr>
                        <div class="email-content">[Email Content]</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#inbox').addClass('active');
</script>

<script>
    $('#compose-message').click(function(){
        $('#modal-compose-message').modal('show');
        return false;
    });
</script>

@stop