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
                            <h1>Football Team</h1>
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
        <li class="uk-active"><span>Team</span>
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
                                <li class="active"><a href="{{route('football-team')}}"><i class="fa fa-flag"></i> Team</a></li>
                                <li><a href="{{route('football-team-management')}}"><i class="fa fa-male"></i> Management</a></li>
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
                                <div class="row" id="gallery">
                                    <div class="col-md-12 mb30">
                                        <div class="leftsideblue">
                                            <div class="fullsections">
                                                <div class="comlogo text-center">
                                                    <img src="/site/images//clubs/al-khor.png" class="lazy centerd">
                                                    <span class="bigf">AL KHOR SPORTS CLUB</span>
                                                    <span class="smcap">Inspired by the history for the future wins!</span>
                                                </div>
                                                <div class="normaltable">
                                                    <span>Established :</span>
                                                    <span>1961</span>
                                                </div>
                                                <div class="normaltable">
                                                    <span>Nickname :</span>
                                                    <span>The Knights</span>
                                                </div>
                                                <div class="normaltable">
                                                    <span>Club President :</span>
                                                    <span>Mr. Hassan Jumaa Al Mohannadi</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rightsidewhite">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="whitepadd">
                                                        <img src="/site/images//jblue.jpg" class="lazy">
                                                        <span class="jname">Home Kit</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="whitepadd">
                                                        <img src="/site/images//jwhite.jpg" class="lazy">
                                                        <span class="jname">Away Kit</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt30">
                                                    <h3>Al-Khor Sports Club History</h3>
                                                    <p>Al Khor was formed when local residents – who mainly worked in Oil and Gas-, realized the importance of having a Club to provide them with their sports and social needs. Two local sporting clubs came together to form Al Taawon sports club in 1964. In 2002, the QOC issued its decision to change Al Taawon Club name to become Al Khor Sports Club, to represent the city of Al Khor.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="text-center mb30">Home Stadium - Al Khor Stadium</h3>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mb30">
                                                <a href="/site/images//football/Al_Khor_Stadium.jpg" class="lumos-link" data-lumos="atletics">
                                                    <img src="/site/images//football/Al_Khor_Stadium.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mb30">
                                                <a href="/site/images//football/IMG_2094.jpg" class="lumos-link" data-lumos="atletics">
                                                    <img src="/site/images//football/IMG_2094.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mb30">
                                                <a href="/site/images//football/IMG_2097.jpg" class="lumos-link" data-lumos="atletics">
                                                    <img src="/site/images//football/IMG_2097.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mb30">
                                                <a href="/site/images//football/IMG_2103.jpg" class="lumos-link" data-lumos="atletics">
                                                    <img src="/site/images//football/IMG_2103.jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mb30">
                                                <a href="/site/images//football/IMG_2123.jpg" class="lumos-link" data-lumos="atletics">
                                                    <img src="/site/images//football/IMG_2123.jpg">
                                                </a>
                                            </div>
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