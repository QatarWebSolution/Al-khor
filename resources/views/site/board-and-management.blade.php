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
                                <h1>Board & Management</h1>
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
            <li class="uk-active"><span>Board & Management</span>
            </li>
        </ul>
    </div>
    <div class="tm-bottom-a-box">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first pr35">
                    <div class="uk-panel">
                        <div class="about-team-page-top-wrap">
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                    <div class="center">
                                        <div class="userimage">
                                            <img src="/site/images//president.jpg" class="lazy">
                                        </div>
                                        <div class="detailssec center">
                                            <span class="uname">Mr. Hassan Juma Al Mohannadi</span>
                                            <span class="uposition">President of Al Khor Sports Club</span>
                                            <span class="uemail">Email : alhassan@alkhor-club.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
                                    <div class="center">
                                        <div class="userimage">
                                            <img src="/site/images//BM_NEW.jpg" class="lazy">
                                        </div>
                                        <div class="detailssec center">
                                            <span class="uname">Mr. Ahmed ibrahim Al Mohannadi</span>
                                            <span class="uposition">Vice President</span>
                                            <span class="uemail">Email : ahmedalmuhannadi@alkhor-club.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fullwidthimage center mt20 mb30">
                                    <img src="/site/images//The-Board-and-management1.jpg" class="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection