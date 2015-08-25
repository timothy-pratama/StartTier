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
@include('modal.basic_modal')

<?php $user = \App\Pengguna::find($id_user) ?>

<h1>{{$nama_investor}}</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div id="content-profile">
            <div class="post-profile">
                <h2>Deskripsi Perusahaan</h2>
                <div class="entry">
                    <img src="{{$user->full_logo_perusahaan}}" width="800" height="300" alt="" />
                    <p>{{nl2br($user->deskripsi_perusahaan)}}</p>
                </div>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #content -->
        <div id="sidebar-profile">
            <ul>
                <li>
                    <h2>Profile Perusahaan</h2>
                    <img src="{{$user->logo_perusahaan}}" />
                    <ul>
                        <li>
                            <table class="table-profile">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$nama_investor}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{nl2br($user->alamat_perusahaan)}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$user->email}}</td>
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
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{$user->rating/5*90}}px"></span></span>
                                <span class="ui-rater-rating">{{number_format((float)$user->rating, 2, '.', '')}}</span>&#160;(<span class="ui-rater-rateCount">{{$user->jumlah_pemberi_rating}}</span>)
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
                $komentars = $user->komentars()->orderBy('updated_at','desc')->get();
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

                @if($i == 4 || $j == $user->jumlah_pemberi_rating)
                    <?php $i = 0?>
                    </div>
                @endif

            @endforeach

        </div>

        <div class="row">
            <a class="show-more-review" href="#">Show More Reviews</a>
        </div>

        <h1 class="section-title">Tulis Review</h1>

        <form action="{{route('add_komentar')}}" onsubmit="return submit_rating()" class="form-review" method="post">
          <div class="form-group">
            <label for="InputName">Nama</label>
            <input type="text" class="form-control" id="name" name="nama_komentator" placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="InputEmailAddress">Alamat Email</label>
            <input type="email" class="form-control" id="emailAddress" name="email_komentator" placeholder="Alamat Email" required>
          </div>
          <div class="form-group">
            <label for="rating_score">Rating</label>
            <br>
            <span class="rating">
                <input type="radio" class="rating-input" id="rating-input-1-5" onclick="rating_clicked(5)" name="rating-input-1"/>
                <label for="rating-input-1-5" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-4" onclick="rating_clicked(4)" name="rating-input-1"/>
                <label for="rating-input-1-4" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-3" onclick="rating_clicked(3)" name="rating-input-1"/>
                <label for="rating-input-1-3" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-2" onclick="rating_clicked(2)" name="rating-input-1"/>
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input" id="rating-input-1-1" onclick="rating_clicked(1)" name="rating-input-1" checked/>
                <label for="rating-input-1-1" class="rating-star"></label>
            </span>
          </div>
          <div class="form-group">
            <label for="InputReview">Review</label>
            <textarea class="form-control" id="review" name="review_komentator" placeholder="Tuliskan Review Anda" required rows="5" style="resize: vertical"></textarea>
          </div>
          <input type="hidden" id="id_user" name="id_user" value="{{$id_user}}">
          <input type="hidden" id="transaction_token" name="transaction_token" value="{{Hash::make($user->username)}}" />
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <input type="hidden" name="rating_score" id="nilai-rating" value="" />
          <input type="hidden" name="url_callback" value="{{\Illuminate\Support\Facades\Request::fullUrl()}}" />
          <input type="submit" class="btn btn-primary" value="Tulis" />
        </form>

    </div>

    <div style="clear: both;">&nbsp;</div>

</div>

<script>
    var rating_score = 1;

    function rating_clicked(rating)
    {
        rating_score = rating;
    }

    function submit_rating()
    {
        $('#nilai-rating').val(rating_score);
        return true;
    }
</script>

@if(session('komentar_success_message'))
<script>
    $('#basic_modal_title').text('Berhasil menambahkan review');
    $('#basic_modal_body').find('p').text('Review Anda berhasil ditambahkan.');
    $('#basic_modal').modal('show');
</script>
@endif

<script>
    $('#menu_beranda').removeClass();
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
</script>

@stop