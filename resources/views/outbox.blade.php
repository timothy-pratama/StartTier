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
@include('utilities.utilities')
@include('modal.basic_modal')

<?php
    $outboxes = \App\Pengguna::find(session('current_user')->id_user)->sent_messages()->orderBy('created_at','desc')->get();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2"></div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <button type="button" class="btn btn-default" data-toggle="tooltip" onclick="reloadPage();" title="Refresh">
                &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Aksi <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" onclick="return softDelete();">Hapus</a></li>
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
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Kotak Keluar</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                    @foreach($outboxes as $outbox)
                        @if($outbox->box_sender == 'outbox')
                            <a id="checkbox-{{$outbox->id_pesan}}" href="{{route('read_email',['nama_perusahaan'=>session('current_user')->nama_perusahaan,'id_message'=>$outbox->id_pesan,'url_callback'=>\Illuminate\Support\Facades\Request::fullUrl()])}}" class="list-group-item">
                                <div class="checkbox">
                                    <label style="padding-top: 6px;">
                                        <input class="email-checkbox" id="{{$outbox->id_pesan}}" type="checkbox">
                                    </label>
                                </div>
                                <span class="name" style="min-width: 250px; display: inline-block;">To: {{\App\Pengguna::find($outbox->id_receiver)->nama_perusahaan}}</span>
                                <span class="">{{$outbox->judul_pesan}}</span>
                                <span class="badge" style="margin-top: 3px">{{DateToIndo($outbox->created_at)}}</span>
                            </a>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#outbox').addClass('active');

    function reloadPage()
    {
        location.reload();
    }

    $('#compose-message').click(function(){
        $('#modal-compose-message').modal('show');
        return false;
    });

    function softDelete()
    {
        var checkboxes = [];
        $('.email-checkbox:checked').each(function() {
            checkboxes.push($(this).attr('id'));
        });
        var url= "{{route('soft_delete_email')}}?ids="+checkboxes+'&token='+'{{Hash::make(session('current_user')->username.session('current_user')->password)}}';

        $.get(url,function(data) {
            if(data == 'ok') {
                checkboxes.forEach(function (id) {
                    $('#checkbox-'+id).hide(1000, function(){
                        $(this).remove();
                    });
                });
            }
        });

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

@endsection