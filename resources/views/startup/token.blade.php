@extends('header.master')
@section('navbar')
@include('navbar.startup')
@stop
@section('content')
<h1>Token {{$nama_startup}}</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4 token">
            <table class="data-token">
                <tr>
                    <th style="width: 35%; vertical-align: middle">Jumlah Token Up:</th>
                    <td style="width: 43%; vertical-align: middle">{{session('current_user')->token}}</td>
                    <td style="widows: 22%;">
                        <button class="btn btn-primary">Gunakan</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-md-4"></div>
    </div>

    <div class="row ">
        <div class="col-md-3"></div>
        <div class="col-md-6 beli-token">
            <h3 class="data-beli-token">Beli Paket Token Up</h3>
            <div style="width: 100%; height: 100%">
                <table class="daftar-token" border="1px">
                    <tr>
                        <th style="width: 20%">Jumlah Token</th>
                        <th style="width: 20%">Harga</th>
                        <th style="width: 20%;">Beli</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Rp 100</td>
                        <td>
                            <button class="btn btn-success">Beli</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Rp 500</td>
                        <td>
                            <button class="btn btn-success">Beli</button>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Rp 1000</td>
                        <td>
                            <button class="btn btn-success">Beli</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>

@stop