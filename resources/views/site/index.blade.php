@extends('site.master')
@push('style')
@endpush
@push('scripts')
    <script>
        window.map = false;
        function initialize(){
            var myLatlng = new google.maps.LatLng(25.2898519,51.5086902);
            var mapOptions = {
                zoom:16,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                streetViewControl:false,
                overviewMapControl:false,
                mapTypeControl:false
            };
            window.map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 31, 2018 17:10:25").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get todays date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + " Day&nbsp;&nbsp; " + hours + " Hour&nbsp;&nbsp; "
                + minutes + " Min&nbsp;&nbsp; " + seconds + " Sec ";
            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endpush
@section('body')
    <div class="tm-top-a-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="akslider-module" id="homeslide">
                            <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                <ul class="uk-slideshow uk-overlay-active">
                                    <li aria-hidden="false" class="uk-height-viewport uk-active">
                                        <div style="background-image: url(/site/images/slider-2.jpg);" class="uk-cover-background uk-position-cover lazy"></div>
                                        <img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="/site/images/slider-1.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3>Al Khor beats Al Ahli <span>2-0</span></h3>
                                                    <div class="promo-sub">Al Khor picked up their first points of the QNB Stars League season with a hard-fought 2-0 win over Al Ahli.</div>
                                                    <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" class="uk-height-viewport">
                                        <div style="background-image: url(/site/images/slider-1.jpg);" class="uk-cover-background uk-position-cover lazy"></div>
                                        <img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="/site/images/slider-2.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3>Al Rayyan Beats Al Khor in<span> QSL Round 1</span></h3>
                                                    <div class="promo-sub">Al Rayyan started their QNB Stars League campaign <br/>with a 4-2 away win over Al Khor on Saturday evening.</div>
                                                    <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" class="uk-height-viewport">
                                        <div style="background-image: url(/site/images/main-slider-img1.jpg);" class="uk-cover-background uk-position-cover lazy"></div>
                                        <img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="/site/images/main-slider-img1.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3>Al Khor Sports Club <span>is not exception</span></h3>
                                                    <div class="promo-sub">Being a part of realization of the Qatar National Vision 2030, </div>
                                                    <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                    <li class="uk-active" data-uk-slideshow-item="0"><a href="#">0</a>
                                    </li>
                                    <li data-uk-slideshow-item="1"><a href="#">1</a>
                                    </li>
                                    <li data-uk-slideshow-item="2"><a href="#">2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="fullwhite">
        <div class="tm-top-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="va-latest-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="va-latest-top">
                                        <h3>Latest <span>Results</span></h3>
                                        <div class="tournament">
                                            <address>Venue - Al khor stadium<br></address>
                                        </div>
                                        <div class="date">
                                            september 16, 2017 | 12:10pm
                                        </div>
                                    </div>
                                </div>
                                <div class="va-latest-middle uk-flex uk-flex-middle">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid uk-flex uk-flex-middle">
                                            <div class="uk-width-2-12 center">
                                                <a href="results.php">
                                                    <img src="/site/images/clubs/Al_rayyan.png" class="img-polaroid lazy" alt="" title="">
                                                </a>
                                            </div>
                                            <div class="uk-width-3-12 name uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    AL RAYAN
                                                </div>
                                            </div>
                                            <div class="uk-width-2-12 score">
                                                <div class="title">score</div>
                                                <div class="table">
                                                    <div class="left"> 3</div>
                                                    <div class="right"> 5</div>
                                                    <div class="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-12 name alt uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    AL KHOR
                                                </div>
                                            </div>
                                            <div class="uk-width-2-12 center">
                                                <a href="results.php">
                                                    <img src="/site/images/clubs/al-khor.png" class="img-polaroid lazy" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-container uk-container-center">
                                    <div class="va-latest-bottom">
                                        <div class="uk-grid">
                                            <div class="uk-width-8-12 uk-container-center text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus. Pellentesque aliquam justo ut rhoncus lobortis. In sed venenatis massa. Sed sodales faucibus odio, eget tempus nibh accumsan ut. Fusce tincidunt semper finibus. Nullam consequat non leo interdum pulvinar.</p>
                                            </div>
                                        </div>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-1">
                                                <div class="btn-wrap uk-container-center">
                                                    <a class="read-more" href="results.php">More Info</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-top-c-box tm-full-width  home-about">
            <div class="uk-container uk-container-center">
                <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div class="uk-panel">
                            <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                                <div class="va-about-text">
                                    <div class="title">ABOUT<span class="blue"> AL KHORE SPORTS CLUB</span>
                                    </div>
                                    <p>Al Khor Sports Club was unofficially established in 1951 by oil workers to fulfill them with the appropriate sport facilities. The club was re-established in 1961 and adopted football as its primary sport, as well other recreational sports and activities.</p>
                                    <p>The club appearance coincided within the presence of two other clubs in Al Khor, with the three operating separately from each other.</p>
                                    <a class="read-more" href="history.php">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div style="min-height: 497px;" class="uk-panel">
                            <div class="trainers-module tm-trainers-slider ">
                                <div class="trainer-wrapper">
                                    <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                        <div class="trainer-top">
                                            <div class="trainers-btn">
                                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                                <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideset-item="next"></a>
                                            </div>
                                            <h3>BOARD AND MANAGEMENT</h3>
                                        </div>
                                        <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                            <li class="uk-active" style="">
                                                <div class="img-wrap"><img src="/site/images/president.jpg" class="lazy" alt="">
                                                </div>
                                                <div class="name">PRESIDENT OF AL KHOR SPORTS CLUB<span>MR.HASSAN JUMA AL MOHANNADI</span>
                                                </div>
                                            </li>
                                            <li style="display: none;">
                                                <div class="img-wrap"><img src="/site/images/vice-pre.jpg" class="lazy" alt="">
                                                </div>
                                                <div class="name">GENERAL DIRECTOR<span>MR.AHMED IBRAHIM AL MOHANNADI</span>
                                                </div>
                                            </li>
                                            <li style="display: none;">
                                                <div class="img-wrap"><img src="/site/images/general-dir.jpg" class="lazy" alt="">
                                                </div>
                                                <div class="name">GENERAL DIRECTOR<span>MR.ABDULLA GHANEM AL MOHANNADI</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-top-d-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-d" class="tm-top-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="donate-wrap">
                                <div class="donate-inner">
                                    <h3><span>Al Khor </span> Sports Club</h3>
                                    <div class="uk-grid">
                                        <div class="uk-width-8-10 uk-push-1-10 intro-text">
                                            Al Khor Sports Club is not exception. Being a part of realization of the Qatar National Vision 2030, as well as Sports Sector Strategy in Qatar it acts like professional sports education center for the society. For more than fifty years, our club was contributing in sports development. It became sports education center for everyone. Our club has trained several generations of professional athletes in various sports.
                                        </div>
                                    </div>
                                    <form class="teamdonate-form"  method="post" target="paypal">
                                        <br /><br />
                                        <a class="donate-btn" type="submit" name="submit" href="welcoming-letter.php"><span>View More About</span>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-top-e-box tm-full-width  va-main-next-match">
            <div class="uk-container uk-container-center">
                <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 va-single-next-match">
                                        <div class="va-main-next-wrap">
                                            <div class="main-next-match-title"><em>Next <span>Match</span></em>
                                            </div>
                                            <div class="match-list-single">
                                                <div class="match-list-item">
                                                    <div class="count">
                                                        <p id="demo"></p>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo_al_sailiya.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Al Sailiya </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="date">August 31, 2018 | 17:10 </div>
                                                    <div class="clear"></div>
                                                    <div class="location">
                                                        <address>Venue : Khalifa  Stadium<br><br></address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-2 uk-width-small-1-1 va-list-next-match">
                                        <div class="match-list-wrap">
                                            <div class="match-list-item alt">
                                                <div class="date">20, 09, 2018 - 17:55<br /><span class="place">Suhaim Bin Hamad</span> </div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo-qatar.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Qatar </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-list-item alt">
                                                <div class="date">28, 09, 2018 - 20:00<br /><span class="place">Thani Bin Jassim Stadium</span> </div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Umm Salal</div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo-umm_salal.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-list-item alt">
                                                <div class="date">06, 10, 2018 - 17:40<br /><span class="place">Al Khor Stadium</span> </div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/Al_rayyan.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Al Rayyan </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-list-item alt">
                                                <div class="date">20, 10, 2018 - 19:35<br /><span class="place">Al Khor Stadium</span> </div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Al Kharaitiyat </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo-al_kharaitiyat.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-list-item alt">
                                                <div class="date">26, 10, 2018 - 17:20<br /><span class="place">Thani Bin Jassim Stadium</span> </div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Al Gharafa </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo-al_gharafa.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="match-list-item alt">
                                                <div class="date">03, 11, 2018 - 17:15<br /><span class="place">Al Khor Stadium</span> </div>
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo-al_ahli.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">Al Ahli </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">Al Khor </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-top-f-box tm-full-width  va-main-our-news">
            <div class="uk-container uk-container-center">
                <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-grid-collapse" data-uk-grid-match="">
                                    <div class="uk-width-1-1">
                                        <div class="our-news-title">
                                            <h3>Our <span class="blue">Latest News</span></h3>
                                        </div>
                                        <div class="our-news-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                            <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.
                                        </div>
                                    </div>
                                    <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                        <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(/site/images/news-1.jpg); min-height: 280px;">
                                            <a href="news-single.php"></a>
                                            <img class="uk-invisible lazy" src="/site/images/news-1.jpg" alt="">
                                        </div>
                                        <div style="min-height: 280px;" class="info">
                                            <div class="date">
                                                Aug 20, 2018
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.php">Al Khor beats Al Ahli 2-0</a>
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Al Khor picked up their first points of the QNB Stars League season with a hard-fought 2-0 win over Al Ahli. Two goals in the second half</p>
                                                <div class="read-more"><a href="news-single.php">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                        <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(/site/images/news-2.jpg); min-height: 280px;">
                                            <a href="news-single.php"></a>
                                            <img class="uk-invisible lazy" src="/site/images/news-2.jpg" alt="">
                                        </div>
                                        <div style="min-height: 280px;" class="info">
                                            <div class="date">
                                                Aug 22, 2018
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.php">
                                                        Al Rayyan Beats Al Khor in QSL Round 1</a>
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Al Rayyan started their QNB Stars League campaign with a 4-2 away win over Al Khor on Saturday evening. Both sides were reduced to </p>
                                                <div class="read-more"><a href="news-single.php">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="all-news-btn"><a href="news.php"><span>All News</span></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-top-g-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-g" class="tm-top-g uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="gallery-title">
                                <div class="uk-container uk-container-center tt-gallery-top-main">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-3-10 title">Photo Gallery</div>
                                        <div class="uk-width-7-10 text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-sticky-placeholder">
                                <div style="margin: 0px;" class="button-group filter-button-group" data-uk-sticky="{top:70, boundary: true}">
                                    <div class="uk-container uk-container-center">
                                        <button class="active" data-filter="*">all</button>
                                        <button data-filter=".football">Football</button>
                                        <button data-filter=".basketball">Basketball</button>
                                        <button data-filter=".ourgym">Our GYM</button>
                                        <button data-filter=".mediaday">Media Day</button>
                                        <button data-filter=".vollyfest">Volleyball Festival</button>
                                        <button data-filter=".story">Beginning of our story</button>
                                        <a href="image-gallery.php" class="viewll">View All Gallery</a>
                                    </div>
                                </div>
                            </div>
                            <div id="boundary">
                                <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item mediaday">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/1.jpg" data-uk-lightbox="{group:'my-group'}" class="img-0">
                                                <img src="/site/images/gallery/1.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/1.jpg" data-uk-lightbox="{group:'my-group'}" class="img-1">
                                                <img src="/site/images/gallery/1.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Media Day </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item football">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/2.jpg" data-uk-lightbox="{group:'my-group1'}" class="img-0">
                                                <img src="/site/images/gallery/2.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/2.jpg" data-uk-lightbox="{group:'my-group1'}" class="img-1">
                                                <img src="/site/images/gallery/2.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Football </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item basketball ">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/3.jpg" data-uk-lightbox="{group:'my-group2'}" class="img-0">
                                                <img src="/site/images/gallery/3.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/3.jpg" data-uk-lightbox="{group:'my-group2'}" class="img-1">
                                                <img src="/site/images/gallery/3.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Basketball</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item ourgym">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/4.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-0">
                                                <img src="/site/images/gallery/4.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/4.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-1">
                                                <img src="/site/images/gallery/4.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Our Gym</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item vollyfest">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/5.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-0">
                                                <img src="/site/images/gallery/5.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/5.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-1">
                                                <img src="/site/images/gallery/5.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Vollyball </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item story">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/6.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-0">
                                                <img src="/site/images/gallery/6.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/6.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-1">
                                                <img src="/site/images/gallery/6.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Begining of story </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item football">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/7.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-0">
                                                <img src="/site/images/gallery/7.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/7.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-1">
                                                <img src="/site/images/gallery/7.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Football </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item football">
                                        <div class="gallery-album">
                                            <a href="/site/images/gallery/8.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-0">
                                                <img src="/site/images/gallery/8.jpg" alt="" class="lazy">
                                            </a>
                                            <a href="/site/images/gallery/8.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-1">
                                                <img src="/site/images/gallery/8.jpg" alt="" class="lazy">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Football </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- <div class="tm-bottom-a-box tm-full-width  ">
           <div class="uk-container uk-container-center">
               <section id="tm-bottom-a" class="tm-bottom-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                   <div class="uk-width-1-1">
                       <div class="uk-panel tt-achievments-wrap">
                           <div class="uk-grid uk-grid-collapse">
                               <div class="uk-width-large-4-10 uk-width-medium-1-1 achievments-block">
                                   <div class="our-awards-main-wrap">
                                       <div class="uk-slidenav-position our-awards" data-uk-slider="{autoplay:true, autoplayInterval:7000}">
                                           <div class="our-awards-main-title">
                                               <h2>Our <span>Awards</span></h2>
                                               <div class="our-awards-btn">
                                                   <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                                                   <a draggable="false" href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
                                               </div>
                                           </div>
                                           <div class="uk-slider-container">
                                               <ul class="uk-slider uk-grid uk-grid-width-large-1-2">
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img1.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img2.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img3.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img4.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img5.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img3.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img1.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img2.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img3.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                                   <li>
                                                       <div class="img-wrap"><img draggable="false" src="/site/images/award-img4.png" alt="">
                                                       </div>
                                                       <div class="text">2014 world cup champion</div>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="uk-width-large-5-10 uk-width-medium-1-1 achievments-block uk-push-1-10">
                                   <div class="achievments-inner">
                                       <div class="our-awards-main-title">
                                           <h2>achievements</h2>
                                       </div>
                                       <div class="uk-grid">
                                           <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                               <div class="item">
                                                   <div class="icon"><img src="/site/images/stat-icon.png" alt="">
                                                   </div>
                                                   <div class="info">
                                                       <div class="number">35</div>
                                                       <div class="text">goals</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                               <div class="item">
                                                   <div class="icon"><img src="/site/images/stat-icon1.png" alt="">
                                                   </div>
                                                   <div class="info">
                                                       <div class="number">12</div>
                                                       <div class="text">games played</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                               <div class="item">
                                                   <div class="icon"><img src="/site/images/stat-icon2.png" alt="">
                                                   </div>
                                                   <div class="info">
                                                       <div class="number">13</div>
                                                       <div class="text">violations</div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="uk-width-large-2-4 uk-width-medium-1-2 uk-width-small-1-2">
                                               <div class="item">
                                                   <div class="icon"><img src="/site/images/stat-icon3.png" alt="">
                                                   </div>
                                                   <div class="info">
                                                       <div class="number">8</div>
                                                       <div class="text">Awards</div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
           </div>
           </div> -->
        <div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="our-team-main-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="our-team-wrap">
                                                <div class="our-team-title">
                                                    <h3>Our <span class="blue">Football Team</span></h3>
                                                </div>
                                                <div class="our-team-text">
                                                    <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                                </div>
                                                <div class="our-team-text additional">
                                                    <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                                </div>
                                                <div class="team-read-wrap"><a class="team-read-more" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number"><span>17</span>
                                                        </div>
                                                        <a href="player.php">
                                                            <img src="/site/images/team/1.jpg" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a href="player.php">  Said Brahmi </a>
                                                            </h3>
                                                        </div>
                                                        <div class="position">  Wing </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number">
                                                            <span>23</span>
                                                        </div>
                                                        <a href="player.php">
                                                            <img src="/site/images/team/2.jpg" class="img-polaroid lazy" alt="John Montgomery" title="John Montgomery">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a href="player.php">  Welinton Souza Silva </a>
                                                            </h3>
                                                        </div>
                                                        <div class="position">Defender</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number">
                                                            <span>9</span>
                                                        </div>
                                                        <a href="player.php">
                                                            <img src="/site/images/team/3.jpg" class="img-polaroid lazy" alt="Johnny Thompson" title="Johnny Thompson">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3><a href="player.php"> Mouhssin Iajour</a></h3>
                                                        </div>
                                                        <div class="position">  Midfielder </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number"><span>16</span>
                                                        </div>
                                                        <a href="player.php">
                                                            <img src="/site/images/team/4.jpg" class="img-polaroid lazy" alt="Benjamin Mendoza" title="Benjamin Mendoza">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a href="player.php">Saud Jibril</a>
                                                            </h3>
                                                        </div>
                                                        <div class="position">  Midfielder </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-team-btn"><a href="players.php"><span>View Full Team</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-bottom-d-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="last-video-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid">
                                        <div class="uk-width-medium-1-1">
                                            <div class="last-video-title">
                                                <h2>Latest <span>Video</span></h2>
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <iframe src="https://www.youtube.com/embed/cAPHcHIOs8w?rel=0&amp;showinfo=0" allowfullscreen="" height="546" width="970"></iframe>
                                        </div>
                                        <div class="uk-width-medium-1-1 uk-width-small-1-1 partners-slider">
                                            <div data-uk-slideset="{small: 2, medium: 5, large: 5}">
                                                <div class="uk-slidenav-position">
                                                    <ul class="uk-grid uk-slideset uk-grid-width-1-1 uk-grid-width-large-1-5 uk-grid-width-medium-1-5 uk-grid-width-small-1-2">
                                                        <li>
                                                            <a href="http://al-saddclub.com/initial/" target="_blank"><img src="/site/images/clubs/logo-al_sadd.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="http://al-ahliclub.com/" target="_blank"><img src="/site/images/clubs/logo-al_ahli.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.alarabi.qa/" target="_blank"><img src="/site/images/clubs/logo-al_arabi.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.qsl.qa/en/club/al-rayyan" target="_blank"><img src="/site/images/clubs/Al_rayyan.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="http://www.algharafa.com//en/index.php" target="_blank"><img src="/site/images/clubs/logo-al_gharafa.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="http://www.alkharaitiyat.com/aksc/" target="_blank"><img src="/site/images/clubs/logo-al_kharaitiyat.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="/site/images/clubs/al-khor.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="http://alsailiyasportclub.com/ImageGalleryEn.aspx" target="_blank"><img src="/site/images/clubs/logo_al_sailiya.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.qsl.qa/en/club/al-shahania" target="_blank"><img src="/site/images/clubs/logo-al_shahania.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" target="_blank"><img src="/site/images/clubs/logo-al_shamal.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="http://www.qsl.com.qa/en/Clubs/view/5/%D8%A7%D9%84%D9%88%D9%83%D8%B1%D8%A9" target="_blank"><img src="/site/images/clubs/logo-al_wakrah.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="http://lekhwiyaclub.qa/" target="_blank"><img src="/site/images/clubs/alduhali.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.mesaimeerclub.com/#sthash.vMwEYqc9.dpuf" target="_blank"><img src="/site/images/clubs/logo-mesaimeer.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" target="_blank"><img src="/site/images/clubs/logo-umm_salal.png" alt="" class="lazy"></a>
                                                        </li>
                                                        <li>
                                                            <a href="" target="_blank"><img src="/site/images/clubs/logo-muaither.png" alt="" class="lazy"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="uk-slideset-nav uk-dotnav uk-flex-center">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-bottom-e-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">
                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                                <div class="contact-info-lines uk-vertical-align-middle">
                                                    <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span>+974 4472 0820</div>
                                                    <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="mailto:alkhorsportsclub@alkhorclub.com">alkhorsportsclub@alkhorclub.com</a>
                                                    </div>
                                                    <div class="item location"><span class="icon"><i class="uk-icon-map-marker"></i></span>Al Khor Sports Club, P.O. Box
                                                        1105, Doha- Qatar
                                                        Al Khor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                <div class="contact-form uk-height-1-1">
                                                    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                        <div class="contact-form-title">
                                                            <h2>Get in touch</h2>
                                                        </div>
                                                        <div id="aiContactSafe_form_1">
                                                            <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                <div class="contentpaneopen">
                                                                    <div id="aiContactSafeForm">
                                                                        <form method="post" id="adminForm_1" name="adminForm_1">
                                                                            <div id="displayAiContactSafeForm_1">
                                                                                <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                                    <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Name</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="aics_name" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="aics_email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Message</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Message"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <div id="aiContactSafeBtns">
                                                                                <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                                    <table style="margin-left:auto; margin-right:auto;">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                            </td>
                                                                                            <td id="td_aiContactSafeSendButton">
                                                                                                <input id="aiContactSafeSendButton" value="Send" type="submit">
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection