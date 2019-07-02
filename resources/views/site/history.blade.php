@extends('site.master')
@push('style')
@endpush
@push('scripts')
@endpush
@section('body')
    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('/site/images//head-bg.jpg');">
                            <img class="uk-invisible lazy" src="/site/images//head-bg.jpg" alt="" height="300" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>Al Khor Sports Club</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li><a href="#">About Club</a>
            </li>
            <li class="uk-active"><span>History</span>
            </li>
        </ul>
    </div>
    <section class="mb40 gallery">
        <div class="container tabledis">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="borderfull">
                        <!-- Side bar div start -->
                        <div id="sidebars">
                            <div class="sidebarleft mb30">
                                <h3>Al Khor Sports Club</h3>
                                <ul class="nav nav-tabs leftmenu">
                                    <li class="active"><a data-toggle="tab" href="#history">Club History</a></li>
                                    <li><a data-toggle="tab" href="#gallery">Our Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!-- Al khor History tab start -->
                                <div id="history" class="tab-pane fade in active">
                                    <h3 class="uppercase mb10">Al Khor Sports Club History</h3>
                                    <p>Al Khor Sports Club was unofficially established in 1951 by oil workers to fulfill them with the appropriate sport facilities. The club was re-established in 1961 and adopted football as its primary sport, as well other recreational sports and activities.</p>
                                    <div class="row">
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/team-1.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/team-1.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/team-2.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/team-2.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/team-3.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/team-3.jpg" class="lazy">
                                            </a>
                                        </div>
                                    </div>
                                    <p class="mt0">The club appearance coincided within the presence of two other clubs in Al Khor, with the three operating separately from each other. They merged with one of the clubs, ‘Al-Jeel Sports Club’ in 1962. In 1964, they also conglomerated with ‘Nadi Al Aswad’ and had formally made a request to join the Qatar Football Association on 10 June later that year (Resolution no.13). From then on, the club was known as ‘At Taawun’.</p>
                                    <p>Embracing the youth movement, they drew up plans and programs and being provided funds for all the facilities, the club was able to expand the base of participation in most sports as well as participate in various activities. Their original club colors from 1961 were primarily yellow and white. The colors were changed to blue and white after entering the football league in 1964. Their current crest features all 3 colors in it: blue, yellow and white.</p>
                                    <p>In 2004, by decision of the Qatar Olympic Committee, the club changed its name to ‘Al Khor’, in order to accurately reflect on where the club's headquarters are located.</p>
                                </div>
                                <!-- Al khor History tab End -->
                                <!-- Al khor Gallery tab start -->
                                <div id="gallery" class="tab-pane fade">
                                    <h3 class="uppercase mb30">Al Khor Sports Club Gallery</h3>
                                    <div class="row">
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-1.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-1.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-2.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-2.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-3.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-3.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-4.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-4.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-5.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-5.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-6.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-6.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-7.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-7.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-8.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-8.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-9.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-9.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-10.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-10.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-11.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-11.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-12.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-12.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-13.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-13.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-14.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-14.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-15.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-15.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-16.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-16.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-17.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-17.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//history/ground-18.jpg" class="lumos-link" data-lumos="demo3">
                                                <img src="/site/images//history/ground-18.jpg" class="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Al khor gallery tab End -->
                            </div>
                        </div>
                        <!-- Right side content div END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection