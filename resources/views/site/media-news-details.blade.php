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
                                <h1>News</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">News</a></li>
            <li class="uk-active"><span>Heading of the news content</span></li>
        </ul>
    </div>
    <section class="mb40 gallery">
        <div class="container tabledis">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="borderfull">
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!--Press Releases tab start -->
                                <div class="tab-pane fade in active">
                                    <!-- <h3 class="uppercase mb30">Press Releases</h3>  -->
                                    <div class="row">
                                        <div class="tm-main col-md-12">
                                            <main id="tm-content" class="tm-content">
                                                <div class="contentpaneopen">
                                                    <article>
                                                        <div class="clearfix"></div>
                                                        @php $images    =   json_decode($news->images) @endphp
                                                        @if($images)
                                                            <div class="article-slider">
                                                            <div id="carusel-11-30" class="uk-slidenav-position" data-uk-slideshow="{ height : 500 }">
                                                                <ul class="uk-slideshow">
                                                                    @foreach($images as $image)
                                                                        <li>
                                                                            <div style="background-image: url(/uploads/{{$image}});" class="uk-cover-background uk-position-cover"></div>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                                <div class="article-slider-btn">
                                                                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="article-param">
                                                            <div class="date">
                                                                <i class="uk-icon-calendar"></i>
                                                                {{\Carbon\Carbon::createFromFormat('d/m/Y',$news->date)->format('F d Y')}}
                                                            </div>
                                                            <div class="author">
                                                                <i class="uk-icon-user"></i>
                                                                <a class="filter-link" data-original-title="Show only articles of <b>Guest</b>" href="#" rel="nofollow">Al Khore Admin</a>
                                                            </div>
                                                        </div>
                                                        <div class="article-single-text">
                                                            <p>
                                                                {{$news->description_en}}
                                                            </p>
                                                        </div>
                                                        <div class="sharethis-inline-share-buttons"></div>
                                                    </article>
                                                    <div class="news-nav-wrap">
                                                        <div class="uk-grid" data-uk-grid-match="">
                                                            @if($previous)
                                                                <div class="uk-width-1-2 uk-panel list-article news-nav">
                                                                    <div class="name">
                                                                        <h4>
                                                                            <a href="{{route('media-news-details',$previous)}}">
                                                                                Previous
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if($next)
                                                                <div class="uk-width-1-2 uk-panel list-article news-nav">
                                                                    <div class="name">
                                                                    <h4>
                                                                        <a href="{{route('media-news-details',$next)}}">
                                                                            Next
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <h3 class="other-post-title">Other <span>Posts</span></h3>
                                                    <div class="uk-grid" data-uk-grid-match="">
                                                        @foreach($newslist as $news)
                                                            <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article other uk-flex uk-flex-column">
                                                            <div class="wrapper">
                                                                @php $images    =   json_decode($news->images) @endphp
                                                                @if($images)
                                                                    <div class="img-wrap">
                                                                        <a href="{{route('media-news-details',$news->id)}}">
                                                                            <img src="/uploads/{{$images[0]}}" class="img-polaroid lazy" alt="">
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                <div class="info">
                                                                    <div class="date">
                                                                        {{\Carbon\Carbon::createFromFormat('d/m/Y',$news->date)->format('F d Y')}}
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4>
                                                                            <a href="{{route('media-news-details',$news->id)}}">
                                                                                {{$news->title_en}}
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </main>
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