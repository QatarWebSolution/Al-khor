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
                                <h1>Mission, vision and values</h1>
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
            <li class="uk-active"><span>Mission, vision and values</span>
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
                                    <li class="active"><a data-toggle="tab" href="#misvis">Mission, vision and values</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!-- Al khor first sc community tab start -->
                                <div id="misvis" class="tab-pane fade in active">
                                    <!--  <h3 class="uppercase mb10">Mission, vision and values</h3>  -->
                                    <h4 class="blue mt0 flato bold">Mission</h4>
                                    <img src="/site/images//mission.jpg" class="img-responsive mb20 lazy">

                                    <p>We aim to develop the sports community through providing the highest quality of sports training services and leisure. We create and develop professional sports teams which able to show the results not only in local but also in international competitions. We inspire our members for new achievements and wins in sports!</p>
                                    <h4 class="blue mt0 flato bold">Vision</h4>
                                    <p>Making sport fun, easy and popular we are eager to engage as much people in sports as possible.To adopt the best practices and means in physical activities we are one of the main sports education and leadership centers in Al Khor.</p>
                                    <h4 class="blue mt0 flato bold">Values</h4>
                                    <p>We aim to keep the sports traditions based on the long history of the club. Putting past achievements of the club as an example we inspire young people for the future wins and results in sports.However, we try to keep up with the times and use the latest methods and technologies in sports training.</p>
                                    <h4 class="blue mt0 flato bold">Motto</h4>
                                    <p>Al Khor Sports Club. Inspired by the history for the future wins.</p>



                                </div>
                                <!-- Al khor first sc community tab End -->
                            </div>
                        </div>
                        <!-- Right side content div END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection