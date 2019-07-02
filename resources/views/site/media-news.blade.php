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
            <li><a href="index.php">Home</a>
            </li>
            <li><a href="#">Media Center</a>
            </li>
            <li class="uk-active"><span>News</span>
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
                                <h3>Al Khor Sports Club Media Center</h3>
                                <ul class="nav nav-tabs leftmenu">
                                    <li><a href="press-releases.php"><i class="fa fa-newspaper-o"></i> Press Releases</a></li>
                                    <li><a href="events-calendar.php"><i class="fa fa-calendar"></i> Events Calendar</a></li>
                                    <li><a href="media-contacts.php"><i class="fa fa-users"></i> Contacts</a></li>
                                    <li class="active"><a data-toggle="tab" href="media-news.php"><i class="fa fa-microphone"></i> News</a></li>
                                    <li><a href="download-area.php"><i class="fa fa-download"></i> Download Area</a></li>
                                    <ul class="subul">
                                        <li><a href="download-area-image-gallery.php"><i class="fa fa-photo"></i> Image Gallery</a></li>
                                        <li><a href="download-area-video.php"><i class="fa fa-video-camera"></i> Video</a></li>
                                        <li><a href="download-area-files.php"><i class="fa fa-file-powerpoint-o"></i> Files</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!--Press Releases tab start -->
                                <div class="tab-pane fade in active">
                                    <!-- <h3 class="uppercase mb30">News</h3> -->
                                    <div class="row">
                                        @foreach($newslist as $news)
                                            <div class="col-md-6">
                                            <div class="list-article minheauto">
                                                <div class="wrapper">
                                                    @php $images    =   json_decode($news->images) @endphp
                                                    @if($images)
                                                        <div class="img-wrap uk-flex-wrap-top">
                                                            <a href="{{route('media-news-details',$news->id)}}">
                                                                <img src="/uploads/{{$images[0]}}" class="img-polaroid lazy" alt="">
                                                            </a>
                                                        </div>
                                                    @endif
                                                    <div class="info uk-flex-wrap-middle">
                                                        <div class="name">
                                                            <h4>
                                                                <a href="{{route('media-news-details',$news->id)}}">
                                                                    {{$news->title_en}}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="text heightauto">
                                                            <p>
                                                                {{$news->description_en}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="article-actions uk-flex-wrap-bottom">
                                                    <div class="count"><i class="fa fa-calendar"></i><span>{{\Carbon\Carbon::createFromFormat('d/m/Y',$news->date)->format('F d Y')}}</span></div>
                                                    <div class="read-more"><a href="{{route('media-news-details',$news->id)}}">Read More</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="col-md-12">
                                            <div class="page-nation f-right">
                                                <ul class="pagination pagination-large">
                                                    <li class="disabled"><span>«</span></li>
                                                    <li class="active"><span>1</span></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li class="disabled"><span>...</span></li><li>
                                                    <li><a rel="next" href="#">Next</a></li>

                                                </ul>
                                            </div>
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