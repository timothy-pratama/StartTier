@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>{{$nama_startup}}</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div class="jumbotron">
            <h3>Profile Startup</h3>
            <form action="{{route('home_startup', array('nama_startup'=>'Bukalapak'))}}">
                <div class="form-group">
                    <label for="nama_startup">Nama Startup</label>
                    <input type="text" class="form-control" id="nama_startup" value="Bukalapak">
                </div>
                <div class="form-group">
                    <label for="alamat_startup">Alamat Startup</label>
                    <textarea class="form-control" rows="5">Plaza City View Lt.2 
Jl. Kemang Timur No.22 
Pasar Minggu, 
Pejaten Barat 
Jakarta, Indonesia 12510"</textarea>
                </div>
                <div class="form-group">
                    <label for="email_startup">Email Startup</label>
                    <input type="email" class="form-control" id="email_startup" value="Bukalapak@hotmail.com">
                </div>
                <div class="form-group">
                    <label for="video_startup">Video Startup</label>
                    <input type="text" class="form-control" id="video_startup" value="https://www.youtube.com/watch?v=f7Q4Vf-HwEU">
                </div>
                <div class="form-group">
                    <label for="logo_startup">Logo Startup</label>
                    <input type="file" id="logo_startup">
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
        </div>
        <div class="jumbotron">
            <h3>Detail Startup</h3>
            <form action="{{route('home_startup', array('nama_startup'=>'Bukalapak'))}}">
                <div class="form-group">
                    <label for="deskripsi_startup">Deskripsi Startup</label>
                    <textarea class="form-control" rows="10">Sekilas, BukaLapak.com memiliki konsep yang hampir sama dengan situs-situs lain yang memfasilitasi transaksi jual beli online di Indonesia. Namun ternyata sistem transaksi di BukaLapak.com di desain sedemikian rupa untuk menjaga keamanan pihak penjual maupun pembeli. Pihak penjual mendapat kesempatan untuk memasarkan segala produk jadi (non jasa dan non franchise) yang dilengkapi dengan deskripsi dan foto produk.

Peraturan yang diterapkan BukaLapak.com pun cukup ketat, misalnya larangan copy paste dari penjual lainnya serta larangan untuk mencantumkan alamat, nomor rekening dan kontak pribadi di BukaLapak.com. Dengan demikian seluruh proses transaksi dan pembayaran akan difasilitasi dan dijamin keamanannya oleh BukaLapak.com.

Proses pembayaran dari pihak pembeli akan difasilitasi oleh BukaLapak.com sesuai dengan peraturan yang berlaku. Sistem ini mungkin lebih dikenal dengan istilah Marketplace C2C. Setelah pembayaran selesai dilakukan, BukaLapak.com akan memberikan konfirmasi pada pihak penjual untuk mengirimkan barang ke alamat pembeli. Setelah barang diterima oleh pembeli, BukaLapak.com akan melakukan pencairan dana untuk pihak penjual.

Rangkaian proses transaksi tersebut mudah dilakukan dengan mengikuti petunjuak yang sudah disediakan BukaLapak.com. Selain itu, BukaLapak.com juga akan memberikan tindakan mediasi, banned akun atau pelaporan pada pihak berwajib terhadap penjual yang melakukan penipuan dalam proses transaksi.

Saat ini BukaLapak.com telah berhasil memfasilitasi transaksi online harian senilai US$ 43,000 (sekitar lima ratus juta rupiah). Sebuah angka fantastis untuk sebuah startup original karya anak Indonesia. Semoga kesuksesan BukaLapak.com dapat menjadi acuan bagi putra-putri bangsa lainnya untuk membuat beragam karya inovatif yang bermanfaat bagi bangsa Indonesia.</textarea>
                </div>
                <div class="form-group">
                    <label for="full_logo_startup">Logo Penuh Startup</label>
                    <input type="file" id="full_logo_startup">
                </div>
                <button type="submit" class="btn btn-default">Save</button>
            </form>
        </div>
    </div>
</div>
@stop