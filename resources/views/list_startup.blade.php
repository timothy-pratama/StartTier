@extends('header.master')

@section('navbar')
@include('navbar.index')
@stop

@section('content')
<div id="logo" class="vestibule-container">
    <h1>Daftar Startup</h1>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_4.png')}}" width="324" height="200" alt="" /></div>
                <h2>Bukalapak.com</h2>
                <p>Bukalapak merupakan salah satu online marketplace terkemuka di Indonesia. Seperti halnya situs layanan jual-beli menyediakan sarana jual-beli dari konsumen ke konsumen. Siapa pun dapat membuka toko online di Bukalapak dan melayani pembeli dari seluruh Indonesia untuk transaksi satuan maupun banyak. Bukalapak memiliki slogan jual-beli online mudah dan terpercaya karena Bukalapak memberikan jaminan 100% uang kembali kepada pembeli jika barang tidak dikirimkan oleh pelapak.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_5.png')}}" width="324" height="200" alt="" /></div>
                <h2>Dropbox</h2>
                <p>Dropbox is a file hosting service operated by Dropbox, Inc., headquartered in San Francisco, California, that offers cloud storage, file synchronization, personal cloud, and client software. Dropbox allows users to create a special folder on their computers, which Dropbox then synchronizes so that it appears to be the same folder (with the same contents) regardless of which computer is used to view it. Files placed in this folder are also accessible via the Dropbox website and mobile apps. Dropbox uses a freemium business model, where users are offered a free account with a set storage size and paid subscriptions for accounts with more capacity.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_6.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Skype</h2>
                <p>Skype is a telecommunications application software product that specializes in providing video chat and voice calls from computers, tablets, and mobile devices via the Internet to other devices or telephones/smartphones.[16] Users can also send instant messages, exchange files and images, send video messages, and create conference calls. Skype is available to download onto computers running Microsoft Windows, Mac, or Linux, as well as Android, Blackberry, iOS, and Windows Phone smartphones and tablets. Much of the service is free, but users require Skype Credit or a subscription to call landline or mobile numbers. Skype is based on a freemium model.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_1.png')}}" width="324" height="200" alt="" /></div>
                <h2>Thalmic Labs</h2>
                <p>Led by mechatronics engineers Stephen Lake, Matthew Bailey, and Aaron Grant, we're a world-class team of engineers, researchers and designers building the future of human-computer interaction. We're closing the gap between humans and technology by solving a fundamental question: How do we connect the real and the digital worlds as we move towards wearable and ubiquitous computing?</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_2.png')}}" width="324" height="200" alt="" /></div>
                <h2>Startup Education</h2>
                <p>Startup:Education is a non-profit foundation launched by Mark Zuckerberg with a $100 million foundation dedicated to improving education in Newark, New Jersey. The foundation is dedicated to improving the quality of public education in this country by investing in great classroom experiences to ensure that every child has access to the skills and opportunities they need to reach their full potential.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_3.png')}}" width="324" height="200" alt="" /></div>
                <h2>Reesio</h2>
                <p>The Reesio team has a combined 21 years of real estate brokerage and investing experience, along with 12 years of combined technology experience. This gives us the perfect blend of industry expertise and technology chops that is needed to build a beautiful, clean product that takes into account all of the legal and compliance features that agents require. Unlike our competitors, we never outsource our product development, and we’re never restrained by large company red tape that inhibits innovation. We are forward thinkers who move fast and are passionate about listening to feedback from our customers.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
</div>


<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_4.png')}}" width="324" height="200" alt="" /></div>
                <h2>Bukalapak.com</h2>
                <p>Bukalapak merupakan salah satu online marketplace terkemuka di Indonesia. Seperti halnya situs layanan jual-beli menyediakan sarana jual-beli dari konsumen ke konsumen. Siapa pun dapat membuka toko online di Bukalapak dan melayani pembeli dari seluruh Indonesia untuk transaksi satuan maupun banyak. Bukalapak memiliki slogan jual-beli online mudah dan terpercaya karena Bukalapak memberikan jaminan 100% uang kembali kepada pembeli jika barang tidak dikirimkan oleh pelapak.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_5.png')}}" width="324" height="200" alt="" /></div>
                <h2>Dropbox</h2>
                <p>Dropbox is a file hosting service operated by Dropbox, Inc., headquartered in San Francisco, California, that offers cloud storage, file synchronization, personal cloud, and client software. Dropbox allows users to create a special folder on their computers, which Dropbox then synchronizes so that it appears to be the same folder (with the same contents) regardless of which computer is used to view it. Files placed in this folder are also accessible via the Dropbox website and mobile apps. Dropbox uses a freemium business model, where users are offered a free account with a set storage size and paid subscriptions for accounts with more capacity.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_6.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Skype</h2>
                <p>Skype is a telecommunications application software product that specializes in providing video chat and voice calls from computers, tablets, and mobile devices via the Internet to other devices or telephones/smartphones.[16] Users can also send instant messages, exchange files and images, send video messages, and create conference calls. Skype is available to download onto computers running Microsoft Windows, Mac, or Linux, as well as Android, Blackberry, iOS, and Windows Phone smartphones and tablets. Much of the service is free, but users require Skype Credit or a subscription to call landline or mobile numbers. Skype is based on a freemium model.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_1.png')}}" width="324" height="200" alt="" /></div>
                <h2>Thalmic Labs</h2>
                <p>Led by mechatronics engineers Stephen Lake, Matthew Bailey, and Aaron Grant, we're a world-class team of engineers, researchers and designers building the future of human-computer interaction. We're closing the gap between humans and technology by solving a fundamental question: How do we connect the real and the digital worlds as we move towards wearable and ubiquitous computing?</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_2.png')}}" width="324" height="200" alt="" /></div>
                <h2>Startup Education</h2>
                <p>Startup:Education is a non-profit foundation launched by Mark Zuckerberg with a $100 million foundation dedicated to improving education in Newark, New Jersey. The foundation is dedicated to improving the quality of public education in this country by investing in great classroom experiences to ensure that every child has access to the skills and opportunities they need to reach their full potential.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_3.png')}}" width="324" height="200" alt="" /></div>
                <h2>Reesio</h2>
                <p>The Reesio team has a combined 21 years of real estate brokerage and investing experience, along with 12 years of combined technology experience. This gives us the perfect blend of industry expertise and technology chops that is needed to build a beautiful, clean product that takes into account all of the legal and compliance features that agents require. Unlike our competitors, we never outsource our product development, and we’re never restrained by large company red tape that inhibits innovation. We are forward thinkers who move fast and are passionate about listening to feedback from our customers.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
</div>


<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_4.png')}}" width="324" height="200" alt="" /></div>
                <h2>Bukalapak.com</h2>
                <p>Bukalapak merupakan salah satu online marketplace terkemuka di Indonesia. Seperti halnya situs layanan jual-beli menyediakan sarana jual-beli dari konsumen ke konsumen. Siapa pun dapat membuka toko online di Bukalapak dan melayani pembeli dari seluruh Indonesia untuk transaksi satuan maupun banyak. Bukalapak memiliki slogan jual-beli online mudah dan terpercaya karena Bukalapak memberikan jaminan 100% uang kembali kepada pembeli jika barang tidak dikirimkan oleh pelapak.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_5.png')}}" width="324" height="200" alt="" /></div>
                <h2>Dropbox</h2>
                <p>Dropbox is a file hosting service operated by Dropbox, Inc., headquartered in San Francisco, California, that offers cloud storage, file synchronization, personal cloud, and client software. Dropbox allows users to create a special folder on their computers, which Dropbox then synchronizes so that it appears to be the same folder (with the same contents) regardless of which computer is used to view it. Files placed in this folder are also accessible via the Dropbox website and mobile apps. Dropbox uses a freemium business model, where users are offered a free account with a set storage size and paid subscriptions for accounts with more capacity.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_6.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Skype</h2>
                <p>Skype is a telecommunications application software product that specializes in providing video chat and voice calls from computers, tablets, and mobile devices via the Internet to other devices or telephones/smartphones.[16] Users can also send instant messages, exchange files and images, send video messages, and create conference calls. Skype is available to download onto computers running Microsoft Windows, Mac, or Linux, as well as Android, Blackberry, iOS, and Windows Phone smartphones and tablets. Much of the service is free, but users require Skype Credit or a subscription to call landline or mobile numbers. Skype is based on a freemium model.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_1.png')}}" width="324" height="200" alt="" /></div>
                <h2>Thalmic Labs</h2>
                <p>Led by mechatronics engineers Stephen Lake, Matthew Bailey, and Aaron Grant, we're a world-class team of engineers, researchers and designers building the future of human-computer interaction. We're closing the gap between humans and technology by solving a fundamental question: How do we connect the real and the digital worlds as we move towards wearable and ubiquitous computing?</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_2.png')}}" width="324" height="200" alt="" /></div>
                <h2>Startup Education</h2>
                <p>Startup:Education is a non-profit foundation launched by Mark Zuckerberg with a $100 million foundation dedicated to improving education in Newark, New Jersey. The foundation is dedicated to improving the quality of public education in this country by investing in great classroom experiences to ensure that every child has access to the skills and opportunities they need to reach their full potential.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/logo_3.png')}}" width="324" height="200" alt="" /></div>
                <h2>Reesio</h2>
                <p>The Reesio team has a combined 21 years of real estate brokerage and investing experience, along with 12 years of combined technology experience. This gives us the perfect blend of industry expertise and technology chops that is needed to build a beautiful, clean product that takes into account all of the legal and compliance features that agents require. Unlike our competitors, we never outsource our product development, and we’re never restrained by large company red tape that inhibits innovation. We are forward thinkers who move fast and are passionate about listening to feedback from our customers.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="#" class="button">Lihat Startup</a>
            </div>
        </div>
    </div>
</div>

<script>
    $('#menu_startup').removeClass().addClass("active");
    $('#menu_investor').removeClass();
    $('#menu_beranda').removeClass();
</script>
@stop