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
                                <h1>Hall of fame</h1>
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
            <li class="uk-active"><span>Hall of fame</span>
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
                                    <li class="active"><a data-toggle="tab" href="#hllofframe">Hll of fame</a></li>
                                    <li><a data-toggle="tab" href="#starsofclub">Stars of the Club</a></li>
                                    <li><a data-toggle="tab" href="#achievements">Achievements</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!-- Al khor first sc community tab start -->
                                <div id="hllofframe" class="tab-pane fade in active">
                                    <h3 class="uppercase mb10">Hall of fame</h3>
                                    <p>Since its establishment Al Khor Sports Club trained hundreds of professional athletes, participated in numerous sport competitions in Qatar and abroad. Many athletes of the club were selected for the Qatar National teams and were permanently written in Al Khor Sports Club’s Hall of Fame as well as the country’s sports history. It is worth noting that athletes of each sport of the Club showed results and won places in different competitions from the 3rd to the 1st.</p>
                                    <h4 class="blue mt0 flato bold">Honorable founders of Al Khor Sports Club</h4>
                                    <div class="row">
                                        <div class="col-md-3 mb30">
                                            <div class="frameimage">
                                                <img src="/site/images//dummy.jpg" class="lazy">
                                                <span>Mr. Said Bin Ali Al Mohannadi</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb30">
                                            <div class="frameimage">
                                                <img src="/site/images//dummy.jpg" class="lazy">
                                                <span>Mr. Saleh Muhammad Hasan Al Mohannadi</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb30">
                                            <div class="frameimage">
                                                <img src="/site/images//dummy.jpg" class="lazy">
                                                <span>Mr. Rashid Muhammad Abd Al Wahab Al Mohannadi</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb30">
                                            <div class="frameimage">
                                                <img src="/site/images//dummy.jpg" class="lazy">
                                                <span>Mr. Jum’an Abd Al Karim</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//hall-of-fame/latest.jpg" class="lumos-link" data-lumos="demo2">
                                                <img src="/site/images//hall-of-fame/latest.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb30">
                                            <a href="/site/images//hall-of-fame/late.jpg" class="lumos-link" data-lumos="demo2">
                                                <img src="/site/images//hall-of-fame/late.jpg" class="lazy">
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb20">
                                            <a href="/site/images//hall-of-fame/nowadays.jpg" class="lumos-link" data-lumos="demo2">
                                                <img src="/site/images//hall-of-fame/nowadays.jpg" class="lazy">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Al khor first sc community tab End -->
                                <!-- Al khor sc community tab start -->
                                <div id="starsofclub" class="tab-pane fade">
                                    <h3 class="uppercase mb30">Stars of the club</h3>
                                    <h4 class="blue mt0 flato bold">Players of the Club in National teams of Qatar</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="player-item">
                                                <div class="player-article">
                                                    <div class="wrapper">
                                                        <div class="img-wrap">
                                                            <div class="player-number"><span>17</span>
                                                            </div>
                                                            <a href="player.php">
                                                                <img src="/site/images//team/1.jpg" class="img-polaroid lazy" alt="" title="">
                                                            </a>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">
                                                                <h3>
                                                                    <a href="#">Said Brahmi</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="player-item">
                                                <div class="player-article">
                                                    <div class="wrapper">
                                                        <div class="img-wrap">
                                                            <div class="player-number"><span>17</span>
                                                            </div>
                                                            <a href="player.php">
                                                                <img src="/site/images//team/2.jpg" class="img-polaroid lazy" alt="" title="">
                                                            </a>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">
                                                                <h3>
                                                                    <a href="#">Player Name Here</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="player-item">
                                                <div class="player-article">
                                                    <div class="wrapper">
                                                        <div class="img-wrap">
                                                            <div class="player-number"><span>17</span>
                                                            </div>
                                                            <a href="player.php">
                                                                <img src="/site/images//team/3.jpg" class="img-polaroid lazy" alt="" title="">
                                                            </a>
                                                        </div>
                                                        <div class="info">
                                                            <div class="name">
                                                                <h3>
                                                                    <a href="#">Player Name Here</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Al khor sc community tab End -->
                                <!-- Events calendar tab start -->
                                <div id="achievements" class="tab-pane fade">
                                    <h3 class="uppercase mb30">Events Calendar</h3>
                                    <img src="/site/images//Achievementseng.jpg" class="img-responsive lazy">
                                    <div class="table-responsive movie-table">
                                        <table class="table movie-table">
                                            <thead>
                                            <tr class= "movie-table-head">
                                                <th width="120">&nbsp;</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!--row-->
                                            <tr class= "dark-row">
                                                <td >1968</td>
                                                <td>Club plays in 2nd Division Qatar Football Championship</td>
                                            </tr>
                                            <tr class= "light-row">
                                                <td >1983</td>
                                                <td>2nd Place takenon the Emir Football Cup</td>
                                            </tr>
                                            <tr class= "dark-row">
                                                <td >1983</td>
                                                <td>Club plays in 2nd Division Qatar Football Championship 2nd Place takenon the Sheikh Al Marhoum Jasem bin Hamad Football Cup</td>
                                            </tr>
                                            <tr class= "light-row">
                                                <td >1984</td>
                                                <td>Club plays in Junior Football Championships</td>
                                            </tr>
                                            <!--/.row-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Events calendar tab End -->
                            </div>
                        </div>
                        <!-- Right side content div END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection