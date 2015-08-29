@extends('header.master')
@section('navbar')
@include('navbar.startup')
@stop
@section('content')

@include('modal.basic_modal')
@include('modal.beli_token_confirmation_modal')

<?php
    function convert_to_rupiah($angka)
    {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
    $saldo = convert_to_rupiah(session('current_user')->saldo);
?>

<h1>Token {{$nama_startup}}</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4 token">
            <table class="data-token">
                <tr>
                    <th style="width: 35%; vertical-align: middle">Jumlah Saldo</th>
                    <td>:</td>
                    <td id="jumlah_saldo" style="width: 43%; vertical-align: middle">{{$saldo}}</td>
                    <td style="text-align: center">
                        <button class="btn btn-primary" disabled>Tambah</button>
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%; vertical-align: middle">Jumlah Token Up</th>
                    <td>:</td>
                    <td id="jumlah_token" style="width: 43%; vertical-align: middle">{{session('current_user')->token}}</td>
                    <td style="text-align: center;">
                        <button class="btn btn-primary" onclick="pushThis();">Gunakan</button>
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
                        <td>{{convert_to_rupiah(100)}}</td>
                        <td>
                            <button class="btn btn-success" onclick="beliToken1(1, 100);">Beli</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>{{convert_to_rupiah(500)}}</td>
                        <td>
                            <button class="btn btn-success" onclick="beliToken1(5, 500);">Beli</button>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>{{convert_to_rupiah(1000)}}</td>
                        <td>
                            <button class="btn btn-success" onclick="beliToken1(10, 1000);">Beli</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>

<script>
function toRp(angka){
    var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return 'Rp. ' + rev2.split('').reverse().join('');
}
</script>

<script>
    var saldo = {{session('current_user')->saldo}}
    var quantity, price;

    function pushThis()
    {
        <?php $current_user = session('current_user'); ?>
        window.location.href = '{{route('push_this',['token'=>Hash::make($current_user->username.$current_user->password)])}}';
    }

    function beliToken1(jumlah, harga)
    {
        quantity = jumlah;
        price = harga;
        $('#beli_token_confirmation_modal').modal('show');
    }

    $('#btn-beli-token').click(function(){
        beliToken(quantity, price)
    });

    function beliToken(jumlah, harga)
    {
        <?php $current_user = session('current_user'); ?>
        var url = '{{route('beli_token',['token'=>Hash::make($current_user->username.$current_user->password)])}}&harga='+harga+'&jumlah='+jumlah;
        $.get(url,function(data) {
            if(data == 'ok')
            {
                $('#jumlah_token').hide(500, function(){
                $(this).text(parseInt($(this).text()) + jumlah);
                $(this).show(500);
                });

                $('#jumlah_saldo').hide(500, function(){
                saldo -= harga;
                $(this).text(toRp(saldo - harga));
                $(this).show(500);
                });
            }
            else
            {
                $('#basic_modal_title').text('Gagal Tambah Token');
                $('#basic_modal_body').find('p').text('Saldo Anda tidak cukup');
                $('#basic_modal').modal('show');
            }
        });
    }

</script>

@stop