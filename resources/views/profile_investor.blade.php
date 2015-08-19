@extends('header.master')

@section('navbar')
@include('navbar.guest')
@stop

@section('content')
<h1>{{$nama_investor}}</h1>

<div id="page-bgtop">
    <div id="page-bgbtm">
        <div id="content-profile">
            <div class="post-profile">
                <h2>Deskripsi Perusahaan</h2>
                <div class="entry">
                    <img src="{{asset('img/logo_microsoft.jpg')}}" width="800" height="300" alt="" />
                    <p><b>Microsoft</b> was founded by Bill Gates and Paul Allen on April 4, 1975, to develop and sell BASIC interpreters for Altair 8800. It rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. The company's 1986 initial public offering, and subsequent rise in its share price, created three billionaires and an estimated 12,000 millionaires from Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions. In May 2011, Microsoft acquired Skype Technologies for $8.5 billion in its largest acquisition to date.

                       As of 2013, Microsoft is market dominant in both the IBM PC-compatible operating system and office software suite markets (the latter with Microsoft Office). The company also produces a wide range of other software for desktops and servers, and is active in areas including Internet search (with Bing), the video game industry (with the Xbox, Xbox 360 and Xbox One consoles), the digital services market (through MSN), and mobile phones (via the Windows Phone OS). In June 2012, Microsoft entered the personal computer production market for the first time, with the launch of the Microsoft Surface, a line of tablet computers.

                       With the acquisition of Nokia's devices and services division to form Microsoft Mobile Oy, the company re-entered the smartphone hardware market, after its previous attempt, Microsoft Kin, which resulted from their acquisition of Danger Inc.

                       Microsoft is a portmanteau of the words microcomputer and software.</p>
                </div>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #content -->
        <div id="sidebar-profile">
            <ul>
                <li>
                    <h2>Profile Perusahaan</h2>
                    <img src="{{asset('img/logo_microsoft_small.png')}}" />
                    <ul>
                        <li>
                            <table class="table-profile">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$nama_investor}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>Microsoft Redmond Campus, Redmond, Washington, U.S.</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$nama_investor}}@hotmail.com</td>
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
                                <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                                <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
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
            <textarea class="form-control" id="review" placeholder="Tuliskan Review Anda" required rows="5" style="resize: vertical"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" value="Tulis" />
        </form>

    </div>

    <div style="clear: both;">&nbsp;</div>

</div>
    </div>
</div>

<script>
    $('#menu_beranda').removeClass();
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass();
</script>

@stop