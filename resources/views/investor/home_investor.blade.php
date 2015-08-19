@extends('header.master')

@section('navbar')
@include('navbar.investor')
@stop

@section('content')
<h1>{{$nama_investor}} [<a href="{{route('edit_investor',array('nama_investor'=>$nama_investor))}}">Edit</a>]</h1>

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
                    <p>{{session('current_user')->deskripsi_perusahaan}}</p>
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
                                    <td>{{session('current_user')->alamat_perusahaan}}</td>
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
                                <span class="ui-rater-rating">{{session('current_user')->rating}}</span>&#160;(<span class="ui-rater-rateCount">{{session('current_user')->jumlah_pemberi_rating}}</span>)
                            </span>
                        </div>
                    </div>
                </li>
                </li>
            </ul>
        </div>
        <!-- end #sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
</div>
@stop