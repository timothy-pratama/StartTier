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

@include('modal.basic_modal')
@include('modal.compose_message_modal')
@include('utilities.utilities')

<?php $message = \App\Pesan::find($id_pesan); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2"></div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <button onclick="goBack();" type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Aksi <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{route('soft_delete_from_email',['id_pesan'=>$id_pesan,'token'=>Hash::make(session('current_user')->username.session('current_user')->password)])}}">Hapus</a></li>
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
                <li id="inbox"><a href="{{route('get_inbox',['nama_perusahaan'=>session('current_user')->nama_perusahaan])}}">Kotak Masuk<span class="badge pull-right" style="margin-top: 3px;">{{session('current_user')->recv_messages()->where('read',false)->count()}}</span></a></li>
                <li id="outbox"><a href="{{route('get_outbox',['nama_perusahaan'=>session('current_user')->nama_perusahaan])}}">Kotak Keluar</a></li>
                <li id="trashbox"><a href="{{route('get_trashbox',['nama_perusahaan'=>session('current_user')->nama_perusahaan])}}">Tempat Sampah</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group-item">
                        <div class="email-title"><b>{{$message->judul_pesan}}</b></div>
                        <hr>
                        @if($message->id_sender != session('current_user')->id_user)
                            <?php $user = \App\Pengguna::find($message->id_sender) ?>
                            @if($user->tipe === 'startup')
                                <div class="email-sender"><b>{{$user->nama_perusahaan}}</b> &lt;<a href="{{route('profile_startup',['nama_startup'=>$user->nama_perusahaan,'id'=>$user->id_user])}}">lihat profil</a>&gt;</div>
                            @else
                                <div class="email-sender"><b>{{$user->nama_perusahaan}}</b> &lt;<a href="{{route('profile_investor',['nama_investor'=>$user->nama_perusahaan,'id'=>$user->id_user])}}">lihat profil</a>&gt;</div>
                            @endif
                        @else
                            <?php $user = \App\Pengguna::find($message->id_receiver) ?>
                            @if($user->tipe === 'startup')
                                <div class="email-sender"><b>To: {{$user->nama_perusahaan}}</b> &lt;<a href="{{route('profile_startup',['nama_startup'=>$user->nama_perusahaan,'id'=>$user->id_user])}}">lihat profil</a>&gt;</div>
                            @else
                                <div class="email-sender"><b>To: {{$user->nama_perusahaan}}</b> &lt;<a href="{{route('profile_investor',['nama_investor'=>$user->nama_perusahaan,'id'=>$user->id_user])}}">lihat profil</a>&gt;</div>
                            @endif
                        @endif
                        <hr>
                        <div class="email-date">{{DateToIndo($message->created_at)}} ({{$message->created_at->format('H:i')}})</div>
                        <hr>
                        <div class="email-content"><?php echo nl2br($message->isi_pesan);?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#compose-message').click(function(){
        $('#modal-compose-message').modal('show');
        return false;
    });

    function goBack()
    {
        window.location.href = "{{$fullUrl}}";
        return false;
    }
</script>

@if(session('send_message_success'))
    <script>
    $('#basic_modal_title').text('Kirim Pesan Berhasil');
    $('#basic_modal_body').find('p').text('Pesan Anda berhasil dikirim');
    $('#basic_modal').modal('show');
    </script>
@endif

@stop