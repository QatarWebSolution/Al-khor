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
                        <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('/site/images/head-bg.jpg');">
                            <img class="uk-invisible lazy" src="/site/images/head-bg.jpg" alt="" height="300" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>Football Team Management</h1>
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
            <li><a href="#">Football</a>
            </li>
            <li class="uk-active"><span>Team Management</span>
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
                                <h3>Al Khor Sports Club Football</h3>
                                <ul class="nav nav-tabs leftmenu">
                                    <li><a href="{{route('football-team')}}"><i class="fa fa-flag"></i> Team</a></li>
                                    <li class="active"><a href="{{route('football-team-management')}}"><i class="fa fa-male"></i> Management</a></li>
                                    <li><a href="{{route('football-team-players')}}"><i class="fa fa-users"></i> Players</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!--Press Releases tab start -->
                                <div class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="player-single fullcoachingall npdi">
                                                <div class="col-md-5">
                                                    <img src="/site/images/football/Head-Coach2.jpg" class="lazy bordergradient">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="name">
                                                        <h2>
                                                            Head Coach Jean Fernandez
                                                        </h2>
                                                    </div>
                                                    <div class="wrap">
                                                        <ul class="info fullpare">
                                                            <li><span class="fullcoching">Other Teams Coached</span></li>
                                                            <li><span>1985-1990</span><span>Nice</span></li>
                                                            <li><span>1990 </span><span>11/14/1957</span></li>
                                                            <li><span>1992</span><span>Marseille</span></li>
                                                            <li><span>1993–1994</span><span>Al-Nassr</span></li>
                                                            <li><span>1994–1995  </span><span>Lille</span></li>
                                                            <li><span>1995–1996</span><span>Al-Nassr</span></li>
                                                            <li><span>1985-1990</span><span>Nice</span></li>
                                                            <li><span>1990 </span><span>11/14/1957</span></li>
                                                            <li><span>1992</span><span>Marseille</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="mb30">Management</h3>
                                            <div class="row gallery">
                                                <div class="col-md-4">
                                                    <a class="fulltarget" onclick="lightbox(0)">
                                                        <div class="player-item">
                                                            <div class="player-article">
                                                                <div class="wrapper">
                                                                    <div class="img-wrap">
                                                                        <img src="/site/images/football/m-1.jpg" class="img-polaroid lazy" alt="" title="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h4 class="cname">ABDULLA ZAKI</h4>
                                                                        <p class="cpostion">Fitness Trainer</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="fulltarget" onclick="lightbox(1)">
                                                        <div class="player-item">
                                                            <div class="player-article">
                                                                <div class="wrapper">
                                                                    <div class="img-wrap">
                                                                        <img src="/site/images/football/m-2.jpg" class="img-polaroid lazy" alt="" title="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h4 class="cname">Dr. Hisham</h4>
                                                                        <p class="cpostion"> Doctor of the team</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a class="fulltarget" onclick="lightbox(2)">
                                                        <div class="player-item">
                                                            <div class="player-article">
                                                                <div class="wrapper">
                                                                    <div class="img-wrap">
                                                                        <img src="/site/images/football/m-3.jpg" class="img-polaroid lazy" alt="" title="">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h4 class="cname">Abdul Ghaffar</h4>
                                                                        <p class="cpostion"> Goalkeepers coach</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- This div for popup slider section -->
                                                <div class="col-md-12">
                                                    <div style="display:none;">
                                                        <div id="ninja-slider">
                                                            <div class="slider-inner">
                                                                <ul>
                                                                    <li>
                                                                        <div class="player-single fullcoachingall">
                                                                            <div class="col-md-5">
                                                                                <img src="/site/images/football/m-1.jpg" class="lazy bordergradient">
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="name">
                                                                                    <h2>
                                                                                        ABDULLA ZAKI
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <ul class="info fullpare">
                                                                                        <li><span>Position</span><span>U 13 , Coach (Juniors team)</span></li>
                                                                                        <li><span>Date of birth</span><span>11/14/1957</span></li>
                                                                                        <li><span>Nationality</span><span>Egyptian</span></li>
                                                                                        <li><span>Previous clubs</span><span>Al Khor FC</span></li>
                                                                                        <li><span>In Al Khor since</span><span>1992</span></li>
                                                                                        <li><span>Achievements with Al Khor</span><span>Winning U17 Cup at 1996 with Al-khor club.
                                                                  </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="player-single fullcoachingall">
                                                                            <div class="col-md-5">
                                                                                <img src="/site/images/football/m-2.jpg" class="lazy bordergradient">
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="name">
                                                                                    <h2>
                                                                                        YASSER MOHAMADY ABDULRAHMAN
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <ul class="info fullpare">
                                                                                        <li><span>Position</span><span>U 17 , Coach (Juniors team)</span></li>
                                                                                        <li><span>Date of birth</span><span>11/14/1957</span></li>
                                                                                        <li><span>Nationality</span><span>Egyptian</span></li>
                                                                                        <li><span>Previous clubs</span><span>Al Khor FC</span></li>
                                                                                        <li><span>In Al Khor since</span><span>1992</span></li>
                                                                                        <li><span>Achievements with Al Khor</span><span>Winning U17 Cup at 1996 with Al-khor club. Played with Egypt national team African Nations Cup 1980
                                                                  </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="player-single fullcoachingall">
                                                                            <div class="col-md-5">
                                                                                <img src="/site/images/football/m-3.jpg" class="lazy bordergradient">
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="name">
                                                                                    <h2>
                                                                                        Abdul Ghaffar
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <ul class="info fullpare">
                                                                                        <li><span>Position</span><span>U 17 , Coach (Juniors team)</span></li>
                                                                                        <li><span>Date of birth</span><span>11/14/1957</span></li>
                                                                                        <li><span>Nationality</span><span>Egyptian</span></li>
                                                                                        <li><span>Previous clubs</span><span>Al Khor FC</span></li>
                                                                                        <li><span>In Al Khor since</span><span>1992</span></li>
                                                                                        <li><span>Achievements with Al Khor</span><span>Winning U17 Cup at 1996 with Al-khor club. Played with Egypt national team African Nations Cup 1980
                                                                  </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  popup slider section End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p class="mt0">There are no articles in this category. If subcategories display on this page, they may contain articles.</p> -->
                                </div>
                                <!--Press Releases tab End -->
                            </div>
                        </div>
                        <!-- Right side content div END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection