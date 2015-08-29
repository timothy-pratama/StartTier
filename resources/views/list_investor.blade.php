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

@include('utilities.utilities')

<?php
    $investors = \App\Pengguna::where('tipe','investor')->orderBy('pushed_at','desc')->get();
    $i = 0;
    $j = 0;
?>

<div id="logo" class="vestibule-container">
    <h1>Daftar Perusahaan Investor</h1>
</div>

@foreach($investors as $investor)

    @if($i == 0)
    <div id="three-column" class="vestibule-container">
    @endif
        @if($i == 0)
        <div class="tbox1">
            <div class="box-style box-style01">
                <div class="content">
                    <div class="image"><img src="{{$investor->full_logo_perusahaan}}" width="324" height="200" alt="" /></div>
                    <h2>{{$investor->nama_perusahaan}}</h2>
                    <p></p>
                    <div id="rating" class="stat">
                        <label for="rating">Rating</label>
                        <div class="statVal">
                            <span class="ui-rater">
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{$investor->rating/5*90}}px"></span></span>
                                <span class="ui-rater-rating">{{number_format((float)$investor->rating, 2, '.', '')}}</span>&#160;(<span class="ui-rater-rateCount">{{$investor->jumlah_pemberi_rating}}</span>)
                            </span>
                        </div>
                    </div>
                    <a href="{{route('profile_investor',array('nama_investor'=>$investor->nama_perusahaan, 'id'=>$investor->id_user))}}" class="button">Lihat Investor</a>
                </div>
            </div>
        </div>
        @elseif($i == 1)
        <div class="tbox2">
            <div class="box-style box-style02">
                <div class="content">
                    <div class="image"><img src="{{$investor->full_logo_perusahaan}}" width="324" height="200" alt="" /></div>
                    <h2>{{$investor->nama_perusahaan}}</h2>
                    <p></p>
                    <div id="rating" class="stat">
                        <label for="rating">Rating</label>
                        <div class="statVal">
                            <span class="ui-rater">
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{$investor->rating/5*90}}px"></span></span>
                                <span class="ui-rater-rating">{{number_format((float)$investor->rating, 2, '.', '')}}</span>&#160;(<span class="ui-rater-rateCount">{{$investor->jumlah_pemberi_rating}}</span>)
                            </span>
                        </div>
                    </div>
                    <a href="{{route('profile_investor',array('nama_investor'=>$investor->nama_perusahaan, 'id'=>$investor->id_user))}}" class="button">Lihat Investor</a>
                </div>
            </div>
        </div>
        @elseif($i == 2)
        <div class="tbox3">
            <div class="box-style box-style03">
                <div class="content">
                    <div class="image"><img src="{{$investor->full_logo_perusahaan}}" width="324" height="200" alt="" /></div>
                    <h2>{{$investor->nama_perusahaan}}</h2>
                    <p></p>
                    <div id="rating" class="stat">
                        <label for="rating">Rating</label>
                        <div class="statVal">
                            <span class="ui-rater">
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{$investor->rating/5*90}}px"></span></span>
                                <span class="ui-rater-rating">{{number_format((float)$investor->rating, 2, '.', '')}}</span>&#160;(<span class="ui-rater-rateCount">{{$investor->jumlah_pemberi_rating}}</span>)
                            </span>
                        </div>
                    </div>
                    <a href="{{route('profile_investor',array('nama_investor'=>$investor->nama_perusahaan, 'id'=>$investor->id_user))}}" class="button">Lihat Investor</a>
                </div>
            </div>
        </div>
        @endif
    @if($i == 2)
    </div>
    <?php $i = -1 ?>
    @endif
    <?php $i++; $j++ ?>
@endforeach

<script>
    $('#menu_beranda').removeClass();
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass().addClass('active');
</script>
@stop