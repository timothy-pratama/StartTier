@extends('header.master')

@section('navbar')
@include('navbar.investor')
@stop

@section('content')

@include('utilities.utilities')

<h1>{{$nama_investor}} [<a href="{{route('edit_investor',array('nama_investor'=>$nama_investor))}}" style="color: #337ab7">Edit</a>]</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div id="content-profile">
            <div class="post-profile">
                <h2>Deskripsi Perusahaan</h2>
                <div class="entry">
                    @if(session('current_user')->full_logo_perusahaan === "")
                    <img src="{{asset('img/missing_image.png')}}" width="800" height="300" alt="" />
                    @else
                    <img src="{{session('current_user')->full_logo_perusahaan}}" width="800" height="300" alt="" />
                    @endif
                    @if(session('current_user')->deskripsi_perusahaan === "")
                    <p>Belum ada deskripsi</p>
                    @else
                    <p>
                        <?php
                            $deskripsi = session('current_user')->deskripsi_perusahaan;
                            $formated_deskripsi = nl2br($deskripsi);
                            echo $formated_deskripsi;
                        ?>
                    </p>
                    @endif
                </div>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #content -->
        <div id="sidebar-profile">
            <ul>
                <li>
                    <h2>Profile Perusahaan</h2>
                    @if(session('current_user')->logo_perusahaan === "")
                    <img src="{{asset('img/missing_image.png')}}" />
                    @else
                    <img src="{{session('current_user')->logo_perusahaan}}" />
                    @endif
                    <ul>
                        <li>
                            <table class="table-profile">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$nama_investor}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>
                                        <?php
                                            $alamat = session('current_user')->alamat_perusahaan;
                                            $formated_alamat = nl2br($alamat);
                                            echo $formated_alamat;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{session('current_user')->email}}</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </li>
                <li>
                    <h2>Rating</h2>
                    <div id="rating" class="stat">
                        <div class="statVal">
                            <span class="ui-rater">
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{session('current_user')->rating/5*90}}px"></span></span>
                                <span class="ui-rater-rating">{{number_format((float)session('current_user')->rating, 2, '.', '')}}</span>&#160;(<span class="ui-rater-rateCount">{{session('current_user')->jumlah_pemberi_rating}}</span>)
                            </span>
                        </div>
                    </div>
                </li>
                </li>
            </ul>
        </div>
        <!-- end #sidebar -->
        <div style="clear: both;">&nbsp;</div>

        <h1 class="section-title">Reviews</h1>

                <div class="review">

                    <?php
                        $komentars = session('current_user')->komentars()->orderBy('updated_at','desc')->get();
                        $i = 0;
                        $j = 0;
                    ?>

                    @foreach($komentars as $komentar)

                        @if($i == 0)
                            <div class="row" style="margin-bottom: 2%">
                        @endif

                        <div class="col-md-3">
                            <div class="review-wrapper">
                                <div class="review-header">
                                    <h5 class="username">{{$komentar->nama_komentator}}</h5>
                                    <h5>{{DateToIndo($komentar->updated_at)}}</h5>
                                    <div id="rating" class="stat">
                                        <div class="statVal">
                                            <span class="ui-rater">
                                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{$komentar->rating_score/5*90}}px"></span></span>
                                                <span class="ui-rater-rating">{{$komentar->rating_score}}</span>&#160;
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-content">
                                    <p class="user-review">
                                        {{$komentar->komentar}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php $i++; $j++; ?>

                        @if($i == 4 || $j == session('current_user')->jumlah_pemberi_rating)
                            <?php $i = 0?>
                            </div>
                        @endif

                    @endforeach

                </div>

                <div class="row">
                    <a class="show-more-review" href="#">Show More Reviews</a>
                </div>
    </div>
</div>

@include('modal.basic_modal')
@if(session('sukses_ganti_password'))
<script>
    $('#basic_modal_title').text('Ganti Password Berhasil');
    $('#basic_modal_body').find('p').text('Password Anda berhasil diubah');
    $('#basic_modal').modal('show');
</script>
@endif

<script>
    $('show-more-review').click(function(){
        return false;
    });
    $('show-more-project').click(function(){
        return false;
    });

</script>

@stop