@extends('header.master')

@section('navbar')
@include('navbar.index')
@stop

@section('content')
<div id="logo" class="vestibule-container">
    <h1>Daftar Perusahaan Investor</h1>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_1.png')}}" width="324" height="200" alt="" /></div>
                <h2>Microsoft</h2>
                <p>Microsoft was founded by Bill Gates and Paul Allen on April 4, 1975, to develop and sell BASIC interpreters for Altair 8800. It rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. The company's 1986 initial public offering, and subsequent rise in its share price, created three billionaires and an estimated 12,000 millionaires from Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions. In May 2011, Microsoft acquired Skype Technologies for $8.5 billion in its largest acquisition to date.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_2.png')}}" width="324" height="200" alt="" /></div>
                <h2>Apple</h2>
                <p>Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, online services, and personal computers. Its best-known hardware products are the Mac line of computers, the iPod media player, the iPhone smartphone, the iPad tablet computer, and the Apple Watch smartwatch. Its online services include iCloud, the iTunes Store, and the App Store. Apple's consumer software includes the OS X and iOS operating systems, the iTunes media browser, the Safari web browser, and the iLife and iWork creativity and productivity suites.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_3.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Nokia</h2>
                <p>Nokia Corporation Oyj (Finnish: Nokia Oyj, Finnish pronunciation: [ˈnokiɑ], UK /ˈnɒkiə/, US /ˈnoʊkiə/) is a Finnish multinational communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area. In 2014, Nokia employed 61,656 people across 120 countries, conducts sales in more than 150 countries and reported annual revenues of around €12.73 billion. Nokia is a public limited-liability company listed on the Helsinki Stock Exchange and New York Stock Exchange. It is the world's 274th-largest company measured by 2013 revenues according to the Fortune Global 500.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_4.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Samsung</h2>
                <p>Samsung was founded by Lee Byung-chul in 1938 as a trading company. Over the next three decades, the group diversified into areas including food processing, textiles, insurance, securities and retail. Samsung entered the electronics industry in the late 1960s and the construction and shipbuilding industries in the mid-1970s; these areas would drive its subsequent growth. Following Lee's death in 1987, Samsung was separated into four business groups – Samsung Group, Shinsegae Group, CJ Group and Hansol Group. Since 1990s, Samsung has increasingly globalized its activities, and electronics, particularly mobile phones and semiconductors, have become its most important source of income.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_5.png')}}" width="324" height="200" alt="" /></div>
                <h2>Sony</h2>
                <p>Sony Corporation is the electronics business unit and the parent company of the Sony Group, which is engaged in business through its four operating segments – electronics (including video games, network services and medical business), motion pictures, music and financial services.[6][7][8] These make Sony one of the most comprehensive entertainment companies in the world. Sony's principal business operations include Sony Corporation (Sony Electronics in the U.S.), Sony Pictures Entertainment, Sony Computer Entertainment, Sony Music Entertainment, Sony Mobile Communications (formerly Sony Ericsson), and Sony Financial. Sony is among the Worldwide Top 20 Semiconductor Sales Leaders and as of 2013, the fourth-largest television manufacturer in the world, after Samsung Electronics, LG Electronics and TCL.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_6.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Asus</h2>
                <p>ASUSTeK Computer Inc. (simplified Chinese: 华硕电脑股份有限公司; traditional Chinese: 華碩電腦股份有限公司; pinyin: Huáshuò Diànnǎo Gǔfèn Yǒuxiàn Gōngsī), usually referred to as ASUS (/eɪˈsuːs/) and in Chinese Huáshuò (simplified Chinese: 华硕; traditional Chinese: 華碩), and trading under that name, is a Taiwanese multinational computer hardware and electronics company headquartered in Beitou District, Taipei, Taiwan. Its products include desktops, laptops, netbooks, LED/LCD panels,hd players, mobile phones, networking equipment, monitors, motherboards, graphics cards, optical storage, multimedia products, servers, workstations, and tablet PCs. The company's slogan/tagline was "Rock Solid. Heart Touching", then "Inspiring Innovation. Persistent Perfection." and is currently "In Search of Incredible.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
</div>


<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_1.png')}}" width="324" height="200" alt="" /></div>
                <h2>Microsoft</h2>
                <p>Microsoft was founded by Bill Gates and Paul Allen on April 4, 1975, to develop and sell BASIC interpreters for Altair 8800. It rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. The company's 1986 initial public offering, and subsequent rise in its share price, created three billionaires and an estimated 12,000 millionaires from Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions. In May 2011, Microsoft acquired Skype Technologies for $8.5 billion in its largest acquisition to date.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_2.png')}}" width="324" height="200" alt="" /></div>
                <h2>Apple</h2>
                <p>Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, online services, and personal computers. Its best-known hardware products are the Mac line of computers, the iPod media player, the iPhone smartphone, the iPad tablet computer, and the Apple Watch smartwatch. Its online services include iCloud, the iTunes Store, and the App Store. Apple's consumer software includes the OS X and iOS operating systems, the iTunes media browser, the Safari web browser, and the iLife and iWork creativity and productivity suites.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_3.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Nokia</h2>
                <p>Nokia Corporation Oyj (Finnish: Nokia Oyj, Finnish pronunciation: [ˈnokiɑ], UK /ˈnɒkiə/, US /ˈnoʊkiə/) is a Finnish multinational communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area. In 2014, Nokia employed 61,656 people across 120 countries, conducts sales in more than 150 countries and reported annual revenues of around €12.73 billion. Nokia is a public limited-liability company listed on the Helsinki Stock Exchange and New York Stock Exchange. It is the world's 274th-largest company measured by 2013 revenues according to the Fortune Global 500.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_4.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Samsung</h2>
                <p>Samsung was founded by Lee Byung-chul in 1938 as a trading company. Over the next three decades, the group diversified into areas including food processing, textiles, insurance, securities and retail. Samsung entered the electronics industry in the late 1960s and the construction and shipbuilding industries in the mid-1970s; these areas would drive its subsequent growth. Following Lee's death in 1987, Samsung was separated into four business groups – Samsung Group, Shinsegae Group, CJ Group and Hansol Group. Since 1990s, Samsung has increasingly globalized its activities, and electronics, particularly mobile phones and semiconductors, have become its most important source of income.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_5.png')}}" width="324" height="200" alt="" /></div>
                <h2>Sony</h2>
                <p>Sony Corporation is the electronics business unit and the parent company of the Sony Group, which is engaged in business through its four operating segments – electronics (including video games, network services and medical business), motion pictures, music and financial services.[6][7][8] These make Sony one of the most comprehensive entertainment companies in the world. Sony's principal business operations include Sony Corporation (Sony Electronics in the U.S.), Sony Pictures Entertainment, Sony Computer Entertainment, Sony Music Entertainment, Sony Mobile Communications (formerly Sony Ericsson), and Sony Financial. Sony is among the Worldwide Top 20 Semiconductor Sales Leaders and as of 2013, the fourth-largest television manufacturer in the world, after Samsung Electronics, LG Electronics and TCL.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_6.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Asus</h2>
                <p>ASUSTeK Computer Inc. (simplified Chinese: 华硕电脑股份有限公司; traditional Chinese: 華碩電腦股份有限公司; pinyin: Huáshuò Diànnǎo Gǔfèn Yǒuxiàn Gōngsī), usually referred to as ASUS (/eɪˈsuːs/) and in Chinese Huáshuò (simplified Chinese: 华硕; traditional Chinese: 華碩), and trading under that name, is a Taiwanese multinational computer hardware and electronics company headquartered in Beitou District, Taipei, Taiwan. Its products include desktops, laptops, netbooks, LED/LCD panels,hd players, mobile phones, networking equipment, monitors, motherboards, graphics cards, optical storage, multimedia products, servers, workstations, and tablet PCs. The company's slogan/tagline was "Rock Solid. Heart Touching", then "Inspiring Innovation. Persistent Perfection." and is currently "In Search of Incredible.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
</div>


<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_1.png')}}" width="324" height="200" alt="" /></div>
                <h2>Microsoft</h2>
                <p>Microsoft was founded by Bill Gates and Paul Allen on April 4, 1975, to develop and sell BASIC interpreters for Altair 8800. It rose to dominate the personal computer operating system market with MS-DOS in the mid-1980s, followed by Microsoft Windows. The company's 1986 initial public offering, and subsequent rise in its share price, created three billionaires and an estimated 12,000 millionaires from Microsoft employees. Since the 1990s, it has increasingly diversified from the operating system market and has made a number of corporate acquisitions. In May 2011, Microsoft acquired Skype Technologies for $8.5 billion in its largest acquisition to date.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_2.png')}}" width="324" height="200" alt="" /></div>
                <h2>Apple</h2>
                <p>Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, online services, and personal computers. Its best-known hardware products are the Mac line of computers, the iPod media player, the iPhone smartphone, the iPad tablet computer, and the Apple Watch smartwatch. Its online services include iCloud, the iTunes Store, and the App Store. Apple's consumer software includes the OS X and iOS operating systems, the iTunes media browser, the Safari web browser, and the iLife and iWork creativity and productivity suites.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_3.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Nokia</h2>
                <p>Nokia Corporation Oyj (Finnish: Nokia Oyj, Finnish pronunciation: [ˈnokiɑ], UK /ˈnɒkiə/, US /ˈnoʊkiə/) is a Finnish multinational communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area. In 2014, Nokia employed 61,656 people across 120 countries, conducts sales in more than 150 countries and reported annual revenues of around €12.73 billion. Nokia is a public limited-liability company listed on the Helsinki Stock Exchange and New York Stock Exchange. It is the world's 274th-largest company measured by 2013 revenues according to the Fortune Global 500.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
</div>

<div id="three-column" class="vestibule-container">
    <div class="tbox1">
        <div class="box-style box-style01">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_4.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Samsung</h2>
                <p>Samsung was founded by Lee Byung-chul in 1938 as a trading company. Over the next three decades, the group diversified into areas including food processing, textiles, insurance, securities and retail. Samsung entered the electronics industry in the late 1960s and the construction and shipbuilding industries in the mid-1970s; these areas would drive its subsequent growth. Following Lee's death in 1987, Samsung was separated into four business groups – Samsung Group, Shinsegae Group, CJ Group and Hansol Group. Since 1990s, Samsung has increasingly globalized its activities, and electronics, particularly mobile phones and semiconductors, have become its most important source of income.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox2">
        <div class="box-style box-style02">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_5.png')}}" width="324" height="200" alt="" /></div>
                <h2>Sony</h2>
                <p>Sony Corporation is the electronics business unit and the parent company of the Sony Group, which is engaged in business through its four operating segments – electronics (including video games, network services and medical business), motion pictures, music and financial services.[6][7][8] These make Sony one of the most comprehensive entertainment companies in the world. Sony's principal business operations include Sony Corporation (Sony Electronics in the U.S.), Sony Pictures Entertainment, Sony Computer Entertainment, Sony Music Entertainment, Sony Mobile Communications (formerly Sony Ericsson), and Sony Financial. Sony is among the Worldwide Top 20 Semiconductor Sales Leaders and as of 2013, the fourth-largest television manufacturer in the world, after Samsung Electronics, LG Electronics and TCL.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
    <div class="tbox3">
        <div class="box-style box-style03">
            <div class="content">
                <div class="image"><img src="{{asset('img/investor_6.jpg')}}" width="324" height="200" alt="" /></div>
                <h2>Asus</h2>
                <p>ASUSTeK Computer Inc. (simplified Chinese: 华硕电脑股份有限公司; traditional Chinese: 華碩電腦股份有限公司; pinyin: Huáshuò Diànnǎo Gǔfèn Yǒuxiàn Gōngsī), usually referred to as ASUS (/eɪˈsuːs/) and in Chinese Huáshuò (simplified Chinese: 华硕; traditional Chinese: 華碩), and trading under that name, is a Taiwanese multinational computer hardware and electronics company headquartered in Beitou District, Taipei, Taiwan. Its products include desktops, laptops, netbooks, LED/LCD panels,hd players, mobile phones, networking equipment, monitors, motherboards, graphics cards, optical storage, multimedia products, servers, workstations, and tablet PCs. The company's slogan/tagline was "Rock Solid. Heart Touching", then "Inspiring Innovation. Persistent Perfection." and is currently "In Search of Incredible.</p>
                <div id="rating" class="stat">
                    <label for="rating">Rating</label>
                    <div class="statVal">
                        <span class="ui-rater">
                            <span class="ui-rater-starsOff" style="width:90px;"><span class="ui-rater-starsOn" style="width:81px"></span></span>
                            <span class="ui-rater-rating">4.5</span>&#160;(<span class="ui-rater-rateCount">200</span>)
                        </span>
                    </div>
                </div>
                <a href="{{route('home_investor', array('nama_investor'=>'Microsoft Corporation'))}}" class="button">Lihat Perusahaan</a>
            </div>
        </div>
    </div>
</div>

<script>
    $('#menu_beranda').removeClass();
    $('#menu_startup').removeClass();
    $('#menu_investor').removeClass().addClass('active');
</script>
@stop