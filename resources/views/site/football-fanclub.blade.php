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
                                <h1>Football Fan Club</h1>
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
            <li><a href="#">Sports and Teams</a>
            </li>
            <li class="uk-active"><span>Fan Club</span>
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
                                    <li class="active">
                                        <a href="football-fanclub.php"><i class="fa fa-flag"></i> Football Fan Club</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!--Press Releases tab start -->
                                <div class="tab-pane fade in active">
                                    <h3 class="uppercase mb30">Fan Club</h3>
                                    @if($rewards->football_fanclub_cover_image)
                                        <img src="/uploads/{{$rewards->football_fanclub_cover_image}}" class="lazy">
                                    @endif
                                    {!! $rewards->football_fanclub_en !!}

                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mb30">
                                            <a href="/site/images/football/FC8.jpg" class="lumos-link aftercondition lazy" data-lumos="football">
                                                <img src="/site/images/football/FC8.jpg">
                                            </a>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mb30">
                                            <a href="/site/images/football/FC9.jpg" class="lumos-link aftercondition lazy" data-lumos="football">
                                                <img src="/site/images/football/FC9.jpg">
                                            </a>
                                        </div>

                                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mb30">
                                            <a href="/site/images/football/FC11.jpg" class="lumos-link aftercondition lazy" data-lumos="football">
                                                <img src="/site/images/football/FC11.jpg">
                                            </a>
                                        </div>


                                    </div>

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