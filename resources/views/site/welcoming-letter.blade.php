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
                                <h1>Welcoming letter {{Route::currentRouteName()}}</h1>
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
            <li class="uk-active"><span>Welcoming Letter</span>
            </li>
        </ul>
    </div>
    <div class="tm-bottom-a-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first pr35">
                    <div class="uk-panel">
                        <div class="about-team-page-top-wrap">
                            <div class="uk-grid">
                                <div class="uk-width-large-1-1 uk-width-small-1-1 left-part">
                                    <img src="/site/images/welcomingletter.jpg" class="leftimg lazy">
                                    <p class="sub-title">Dear Fans!</p>
                                    <p>Day by day Qatar is getting unprecedented global recognition in sport and continues to advance through targeted efforts aimed at creating a safer, healthier and more peaceful society. Qatar invests heavily through the Qatar Olympic Committee and its sports federations, strategic allies, partner clubs to increase the supply of sport and active recreation facilities, develop athletes, host international competitions and raise awareness of the benefits of sport and physical activity among society.</p>
                                    <p>And Al Khor Sports Club is not exception. Being a part of realization of the Qatar National Vision 2030, as well as Sports Sector Strategy in Qatar it acts like professional sports education center for the society. </p>
                                    <p>For more than fifty years, our club was contributing in sports development. It became sports education center for everyone. Our club has trained several generations of professional athletes in various sports. Al Khor sports teams have won medals and trophies of local and international competitions level as well. With excellent sports facilities and professional coaches, our club collects sports enthusiasts of different age groups. In addition, Al Khor SC always organizes various social and cultural programs for the local community. Thus, we try to engage in sports as much as possible of the local population and foreign workers.</p>
                                    <p>In fact our club is unique. Al Khor Sports Club has a long history. While not in Doha, it is the only sports center of this scale in the Al Khor municipality and the largest near Ras Laffan industrial city. Professional teams of our club gather fans and encourage people to do sports. In conclusion, I would like to say that the doors of our club are always open to everybody. Our staff will help You to find Your sports way!</p>
                                    <p>Be part of us and become a part of Qatar sport future!</p>
                                    <p class="sub-title">Faithfully Yours<br /><br />
                                        Al Khor Sports Club Managing Board
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection