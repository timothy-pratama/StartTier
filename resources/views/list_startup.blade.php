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
@endsection

@section('content')

@include('modal.basic_modal')
@include('utilities.utilities')

<?php
    $startups = \App\Pengguna::where('tipe','startup')->orderBy('pushed_at','desc')->get();
    $i = 0;
    $j = 1;
?>

<div id="logo" class="vestibule-container">
    <h1>Daftar Startup</h1>
</div>

@foreach($startups as $startup)

    @if($i == 0)
    <div id="three-column" class="vestibule-container">
    @endif
    <div class="tbox{{$i+1}}">
        <div class="box-style box-style0{{$i+1}}">
            <div class="content">
                <div class="image"><img src="{{$startup->full_logo_perusahaan}}" width="324" height="200" alt="" /></div>
                <h2>{{$startup->nama_perusahaan}}</h2>
                <p></p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{$startup->rating/5*90}}px"></span></span>
                            <span class="ui-rater-rating">{{number_format((float)$startup->rating, 2, '.', '')}}</span>&#160;(<span class="ui-rater-rateCount">{{$startup->jumlah_pemberi_rating}}</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('profile_startup',array('nama_startup'=>$startup->nama_perusahaan, 'id'=>$startup->id_user))}}" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    @if($i == 2 || $j == $startups->count())
    </div>
    <?php $i = -1 ?>
    @endif
    <?php $i++; $j++ ?>
@endforeach

@if(session('push_message'))
    <script>
        $('#basic_modal_title').text('Up Startup berhasil');
        $('#basic_modal_body').find('p').text('Startup Anda berhasil di-up');
        $('#basic_modal').modal('show');
    </script>
@endif

<script>
    $('#menu_beranda').removeClass();
    $('#menu_startup').removeClass().addClass('active');
    $('#menu_investor').removeClass();
</script>
@stop