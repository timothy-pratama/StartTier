@extends('header.master')

@section('navbar')
@include('navbar.home_startup')
@stop

@section('content')
<h1>{{$nama_startup}}</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div id="content-profile">

            <div class="post-profile">
                <h2>Deskripsi Startup</h2>
                <div class="entry">
                    <img src="{{asset('img/logo_4.png')}}" width="800" height="300" alt="" />
                    <p>Sekilas, BukaLapak.com memiliki konsep yang hampir sama dengan situs-situs lain yang memfasilitasi transaksi jual beli online di Indonesia. Namun ternyata sistem transaksi di BukaLapak.com di desain sedemikian rupa untuk menjaga keamanan pihak penjual maupun pembeli. Pihak penjual mendapat kesempatan untuk memasarkan segala produk jadi (non jasa dan non franchise) yang dilengkapi dengan deskripsi dan foto produk.

                       Peraturan yang diterapkan BukaLapak.com pun cukup ketat, misalnya larangan copy paste dari penjual lainnya serta larangan untuk mencantumkan alamat, nomor rekening dan kontak pribadi di BukaLapak.com. Dengan demikian seluruh proses transaksi dan pembayaran akan difasilitasi dan dijamin keamanannya oleh BukaLapak.com.

                       Proses pembayaran dari pihak pembeli akan difasilitasi oleh BukaLapak.com sesuai dengan peraturan yang berlaku. Sistem ini mungkin lebih dikenal dengan istilah Marketplace C2C. Setelah pembayaran selesai dilakukan, BukaLapak.com akan memberikan konfirmasi pada pihak penjual untuk mengirimkan barang ke alamat pembeli. Setelah barang diterima oleh pembeli, BukaLapak.com akan melakukan pencairan dana untuk pihak penjual.

                       Rangkaian proses transaksi tersebut mudah dilakukan dengan mengikuti petunjuak yang sudah disediakan BukaLapak.com. Selain itu, BukaLapak.com juga akan memberikan tindakan mediasi, banned akun atau pelaporan pada pihak berwajib terhadap penjual yang melakukan penipuan dalam proses transaksi.

                       Saat ini BukaLapak.com telah berhasil memfasilitasi transaksi online harian senilai US$ 43,000 (sekitar lima ratus juta rupiah). Sebuah angka fantastis untuk sebuah startup original karya anak Indonesia. Semoga kesuksesan BukaLapak.com dapat menjadi acuan bagi putra-putri bangsa lainnya untuk membuat beragam karya inovatif yang bermanfaat bagi bangsa Indonesia.</p>
                </div>
            </div>

            <div class="post-profile">
                <h2 class="title"><a href="#">Amusphere Virtual Reality</a></h2>
                <div class="meta-information">
                    <p class="meta">Posted by <a href="#">Asada Shino</a> on May 26, 2015
                        &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (73)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full Project</a></p>
                </div>
                    <div class="entry">
                        <p><img src="{{asset('img/amusphere.png')}}" width="800" height="300" alt="" /></p>
                        <p>AmuSphere (アミュスフィア, Amyusufia?) is a second generation FullDive console, co-developed by RECT Progress Inc., that is the successor to the NerveGear. Its successor, temporarily named as AmuSphere 2, is planned to be shown in the 2026 Tokyo Game Show and released to the market in 2027. The AmuSphere is a helmet that consists of two metal overlapping rings. The system has been modified to make it safer than its predecessor by changing the microwave transmitter to a low frequency one and the incorporation of various sensors that continually monitor blood pressure and brain waves. If the person's condition becomes abnormal, a safety logout is provoked. This, by default, includes an option that automatically logs out a person if the avatar begins to fall asleep. Unlike the NerveGear, the AmuSphere is not equipped with an internal battery. In addition to other safety measures, the AmuSphere does not block out signals from the body to the extent of its predecessor, the NerveGear, so some players may rent a specialized room which blocks all external interference, designed to make the experience inside the virtual world all the more realistic. <a href="#">(Full Project)</a></p>
                </div>
            </div>

            <div class="post-profile">
                            <h2 class="title"><a href="#">Nerve Gear</a></h2>
                            <div class="meta-information">
                                <p class="meta">Posted by <a href="#">Yuuki Asuna</a> on May 26, 2015
                                    &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (90)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full Project</a></p>
                            </div>
                                <div class="entry">
                                    <p><img src="{{asset('img/nervegear.png')}}" width="800" height="300" alt="" /></p>
                                    <p>The NerveGear (ナーヴギア, Nāvugia?) is the second generation of FullDive technology made by Kayaba Akihiko, released in May 2022. The NerveGear is a streamlined helmet coated in dark blue. At the back, it has a wire of the same color stretched out of a long pad. It also has a battery and internal memory to store data from the games. 30% of the NerveGear's weight is from its internal battery. The NerveGear's high density microwave transceivers can determine what the user's face looks like. The transceivers not only block every transmission from the brain to the body, but also from the body to the brain, thus, while using it, the player is completely insensate to the physical world. While details are never specified, the powerful electromagnet is able to destroy a person's brain, and SAO's operating system has been programmed to do so if the player's hit points are reduced to zero. Despite the exact method that kills a player being disclosed in the story, some of the signs left behind in the brain are cerebral hemorrhaging, and arterial occlusion. The NerveGear is equipped with a new generation diamond semiconductor central processor. To use the NerveGear, the player wears the game console over the head. Then it is recommended for the player to find a comfortable position to station the body, commonly being a bed. Afterwards, the game will load by the initiation words «Link Start». <a href="#">(Full Project)</a></p>
                            </div>
                        </div>

            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #content -->
        <div id="sidebar-profile">
            <ul>
                <li>
                    <h2>Profile Startup</h2>
                    <img src="{{asset('img/bukalapak_small_logo.png')}}" />
                    <ul>
                        <li>
                            <table class="table-profile">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$nama_startup}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>
                                        Plaza City View Lt.2 <br>
                                        Jl. Kemang Timur No.22 <br>
                                        Pasar Minggu, <br>
                                        Pejaten Barat <br>
                                        Jakarta, Indonesia 12510
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$nama_startup}}@hotmail.com</td>
                                </tr>
                                <tr>
                                    <th>Video</th>
                                    <td><a href="https://www.youtube.com/watch?v=f7Q4Vf-HwEU">Lihat Video</a></td>
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
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:90px"></span></span>
                                <span class="ui-rater-rating">5.0</span>&#160;(<span class="ui-rater-rateCount">800</span>)
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