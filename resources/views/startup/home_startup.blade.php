@extends('...header.master')

@section('navbar')
@include('navbar.startup')
@stop

@section('content')
<h1>{{$nama_startup}} [<a href="{{route('edit_startup',array('nama_startup'=>'Bukalapak'))}}">Edit</a>]</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div id="content-profile">

            <div class="post-profile">
                <h2>Deskripsi Startup</h2>
                <div class="entry">
                    <img src="{{session('current_user')->full_logo_perusahaan}}" width="800" height="300" alt="" />
                    <p>{{session('current_user')->deskripsi_perusahaan}}</p>
                </div>
            </div>

        </div>
        <!-- end #content -->
        <div id="sidebar-profile">
            <ul>
                <li>
                    <h2>Profile Startup</h2>
                    <img src="{{session('current_user')->logo_perusahaan}}" />
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
                                        <?php
                                            $alamat = Session::get('current_user')->alamat_perusahaan;
                                            $formatted_alamat = nl2br($alamat);
                                            echo $formatted_alamat;
                                         ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{Session::get('current_user')->email}}</td>
                                </tr>
                                <tr>
                                    <th>Video</th>
                                    <td><a href="{{Session::get('current_user')->video}}">Lihat Video</a></td>
                                </tr>
                                <tr>
                                    <th>Projects</th>
                                    <td>10</td>
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
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:{{session('current_user')->rating / 5 * 90}}px"></span></span>
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

        <h1 class="section-title">Projects</h1>

        <div class="projects container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-profile projects">
                        <h2 class="title"><a href="#">Amusphere Virtual Reality</a> [<a href="{{route('edit_startup_project',array('nama_startup'=>'Bukalapak', 'nama_project'=>'Amusphere Virtual Reality'))}}">Edit</a>]</h2>
                        <div class="meta-information">
                            <p class="meta">Posted by <a href="#">Asada Shino</a> on May 26, 2015
                                &nbsp;&bull;&nbsp;<a href="#" class="permalink">Full Project</a></p>
                        </div>
                            <div class="entry">
                                <p><img src="{{asset('img/amusphere.png')}}" width="800" height="300" alt="" /></p>
                                <p>AmuSphere (アミュスフィア, Amyusufia?) is a second generation FullDive console, co-developed by RECT Progress Inc., that is the successor to the NerveGear. Its successor, temporarily named as AmuSphere 2, is planned to be shown in the 2026 Tokyo Game Show and released to the market in 2027. The AmuSphere is a helmet that consists of two metal overlapping rings. The system has been modified to make it safer than its predecessor by changing the microwave transmitter to a low frequency one and the incorporation of various sensors that continually monitor blood pressure and brain waves. If the person's condition becomes abnormal, a safety logout is provoked. This, by default, includes an option that automatically logs out a person if the avatar begins to fall asleep. Unlike the NerveGear, the AmuSphere is not equipped with an internal battery. In addition to other safety measures, the AmuSphere does not block out signals from the body to the extent of its predecessor, the NerveGear, so some players may rent a specialized room which blocks all external interference, designed to make the experience inside the virtual world all the more realistic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="post-profile projects">
                        <h2 class="title"><a href="#">Nerve Gear</a> [<a href="{{route('edit_startup_project',array('nama_startup'=>'Bukalapak', 'nama_project'=>'Amusphere Virtual Reality'))}}">Edit</a>]</h2>
                        <div class="meta-information">
                            <p class="meta">Posted by <a href="#">Yuuki Asuna</a> on May 26, 2015
                                &nbsp;&bull;&nbsp;<a href="#" class="permalink">Full Project</a></p>
                        </div>
                            <div class="entry">
                                <p><img src="{{asset('img/nervegear.png')}}" width="800" height="300" alt="" /></p>
                                <p>The NerveGear (ナーヴギア, Nāvugia?) is the second generation of FullDive technology made by Kayaba Akihiko, released in May 2022. The NerveGear is a streamlined helmet coated in dark blue. At the back, it has a wire of the same color stretched out of a long pad. It also has a battery and internal memory to store data from the games. 30% of the NerveGear's weight is from its internal battery. The NerveGear's high density microwave transceivers can determine what the user's face looks like. The transceivers not only block every transmission from the brain to the body, but also from the body to the brain, thus, while using it, the player is completely insensate to the physical world. While details are never specified, the powerful electromagnet is able to destroy a person's brain, and SAO's operating system has been programmed to do so if the player's hit points are reduced to zero. Despite the exact method that kills a player being disclosed in the story, some of the signs left behind in the brain are cerebral hemorrhaging, and arterial occlusion. The NerveGear is equipped with a new generation diamond semiconductor central processor. To use the NerveGear, the player wears the game console over the head. Then it is recommended for the player to find a comfortable position to station the body, commonly being a bed. Afterwards, the game will load by the initiation words «Link Start».</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <a class="show-more-project" href="#">Show More Project</a>
            </div>

            <h1 class="section-title">Reviews</h1>

            <div class="review">

                <div class="row">

                    <div class="col-md-3">
                        <div class="review-wrapper">
                            <div class="review-header">
                                <h5 class="username">Gunarto Darsan</h5>
                                <div id="rating" class="stat">
                                    <div class="statVal">
                                        <span class="ui-rater">
                                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:90px"></span></span>
                                            <span class="ui-rater-rating">5.0</span>&#160;
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p class="user-review">
                                    love it banget manteb dah... recommended marketplace
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="review-wrapper">
                            <div class="review-header">
                                <h5 class="username">Huang Ruliang</h5>
                                <div id="rating" class="stat">
                                    <div class="statVal">
                                        <span class="ui-rater">
                                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:90px"></span></span>
                                            <span class="ui-rater-rating">5.0</span>&#160;
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p class="user-review">
                                    aman dan to the point bgt bagus makin hari makin semangat buka app ini.ditingkatkan terus !!
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="review-wrapper">
                            <div class="review-header">
                                <h5 class="username">Fajrin Rasyid</h5>
                                <div id="rating" class="stat">
                                    <div class="statVal">
                                        <span class="ui-rater">
                                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:90px"></span></span>
                                            <span class="ui-rater-rating">5.0</span>&#160;
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p class="user-review">
                                    Very fast, cocok untuk segala penjual As described, sangat cepat dan halus. Penjual partai besar maupun kecil harus mencoba :)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="review-wrapper">
                            <div class="review-header">
                                <h5 class="username">Cemy Nugroho</h5>
                                <div id="rating" class="stat">
                                    <div class="statVal">
                                        <span class="ui-rater">
                                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:90px"></span></span>
                                            <span class="ui-rater-rating">5.0</span>&#160;
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <p class="user-review">
                                    Best Online Shop Aplikasi ini sgt membantu sy dlm membeli barang atau menjual barang, this is the best online shop, easy n safety for shop. Awesome
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <a class="show-more-review" href="#">Show More Reviews</a>
            </div>

            <h1 class="section-title">Tulis Review</h1>

            <form class="form-review">
              <div class="form-group">
                <label for="InputName">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="InputEmailAddress">Alamat Email</label>
                <input type="email" class="form-control" id="emailAddress" placeholder="Alamat Email" required>
              </div>
              <div class="form-group">
                <label for="InputReview">Review</label>
                <textarea class="form-control" id="review" placeholder="Tuliskan Review Anda..." required rows="5" style="resize: vertical"></textarea>
              </div>
              <input type="submit" class="btn btn-primary" value="Tulis" />
            </form>

        </div>

        <div style="clear: both;">&nbsp;</div>

    </div>
</div>
@stop