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
                                <h1>Football Standings and Statistics</h1>
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
            <li class="uk-active"><span>Standings and Statistics</span>
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
                                <h3>Al Khor Sports Club Football Fixtures</h3>
                                <ul class="nav nav-tabs leftmenu">
                                    <li class="active"><a href="football-ticket-service.php"><i class="fa fa-table"></i> Standings and Statistics</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Side bar div END -->
                        <!-- Right side content div start -->
                        <div id="contents">
                            <div class="tab-content">
                                <!--Press Releases tab start -->
                                <div class="tab-pane fade in active">
                                    <h3 class="uppercase mb30">Standings and statistics</h3>
                                    <div class="table-responsive table-bordered movie-table">
                                        <table class="views-table table table-striped movie-table">
                                            <tbody>
                                            <tr class="tophead">
                                                <th></th>
                                                <th class="views-field views-field-counter">Game Date</th>
                                                <th class="views-field views-field-date-1">Time</th>
                                                <th colspan="2" class="views-field views-field-team-a">
                                                    Home
                                                </th>
                                                <th class="views-field views-field-nothing">
                                                </th>
                                                <th colspan="2" class="views-field views-field-field-emblem-1">
                                                    Away
                                                </th>
                                                <th class="views-field views-field-stadium">
                                                    Stadium
                                                </th>
                                                <th class="views-field views-field-field-link-buy-tickets">
                                                    Score
                                                </th>
                                            </tr>
                                            @foreach($fixtures as $fixture)
                                                <tr class="views-row-first">
                                                    <td></td>
                                                    <td class="views-field views-field-counter datelal">
                                                        {{\Carbon\Carbon::parse($fixture->date)->format('d/m/Y')}}
                                                    </td>
                                                    <td class="views-field views-field-date-1">
                                                        <p>{{\Carbon\Carbon::parse($fixture->date)->format('H:i')}} <span class="tbc">&nbsp;TBC&nbsp;</span></p>
                                                    </td>
                                                    <td class="views-field views-field-field-emblem">
                                                        <strong>{{$fixture->home_team_en}}</strong>
                                                    </td>
                                                    <td class="views-field views-field-team-a">
                                                        @if($fixture->home_team_logo)
                                                            <img class="img-responsive img-responsive" src="/uploads/{{$fixture->home_team_logo}}">
                                                        @endif
                                                    </td>
                                                    <td class="views-field views-field-nothing">
                                                        VS
                                                    </td>
                                                    <td class="views-field views-field-field-emblem-1">
                                                        @if($fixture->away_team_logo)
                                                            <img class="img-responsive img-responsive" src="/uploads/{{$fixture->away_team_logo}}">
                                                        @endif
                                                    </td>
                                                    <td class="views-field views-field-team-b">
                                                        <strong>{{$fixture->away_team_en}}</strong>
                                                    </td>
                                                    <td class="views-field views-field-stadium">
                                                        {{$fixture->stadium_en}}
                                                    </td>
                                                    <td class="views-field views-field-field-link-buy-tickets">
                                                        {{$fixture->score_en}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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