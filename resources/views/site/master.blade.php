<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="AL KHOR SPORTS CLUB" />
    <meta property="og:url" content="/" />
    <meta name="description" content="AL KHOR SPORTS CLUB - Inspired by the history for the future wins!" />
    <title>Al Khor Sports Club (Qatar)</title>
    <link href="/site/images/favicon.png" rel="shortcut icon" type="/site/images/favicon.png">
    <link href="/site/css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="/site/css/donate.css" rel="stylesheet" type="text/css" />
    <link href="/site/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/site/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/site/js/mootools-yui-compressed.js"></script>
    <!-- GRT Youtube Plugin CSS -->
    <link rel="stylesheet" href="/site/css/grt-youtube-popup.css">
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBUkWhtyM7XXqnFyUHNgIadoOJlbEclYkA'></script>
    <link href="/site/plugins/ninja/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="/site/plugins/ninja/ninja-slider.js" type="text/javascript"></script>
    <script>
        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";
            nslider.init(idx);
            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }
        function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                var ninjaSldr = document.getElementById("ninja-slider");
                ninjaSldr.parentNode.style.display = "none";
            }
        }
    </script>
</head>
<body class="tm-isblog">
<div class="preloader">
    <div class="loader"></div>
</div>
<div class="over-wrap">
    <!-- Top bar section -->
    <div class="toolbar-wrap topposition">
        <div class="uk-container uk-container-center">
            <div class="tm-toolbar uk-clearfix uk-hidden-small">
                <div class="uk-float-right">
                    <div class="uk-panel">
                        <form class="example" action="">
                            <input type="text" placeholder="Search for News" name="search2">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <ul class="h-social">
                            <li><a href="https://www.instagram.com/alkhor.club/" target="_blank"><img src="/site/images/Insta.png" alt="" width="25" height="25"></a></li>
                            <li><a href="https://www.facebook.com/alkhorclub" target="_blank"><img src="/site/images/soc-facebook.png" alt="" width="25" height="25"></a></li>
                            <li><a href="https://www.youtube.com/user/AlKhorSportsClub" target="_blank"><img src="/site/images/soc-youtube.png" alt="" width="25" height="25"></a></li>
                            <li><a href="https://twitter.com/alkhor_club" target="_blank"><img src="/site/images/soc-twitter.png" alt="" width="25" height="25"></a></li>
                            <li><a href="#" target="_blank"><img src="/site/images/soc-google.png" alt="" width="24" height="24"></a></li>
                            <li><a href="https://www.snapchat.com/add/alkhorsc" target="_blank"><img src="/site/images/snapcode-300x300.png" alt="" width="25" height="25"></a></li>
                            <li><a href="https://telegram.me/alkhorclub" target="_blank"><img src="/site/images/unnamed.png" alt="" width="25" height="25"></a></li>
                        </ul>
                        <ul class="languagepicker">
                            <a href="#">
                                <li><img src="/site/images/us.png" class="lazy"/> English</li>
                            </a>
                            <a href="../ar/index.php">
                                <li><img src="/site/images/qatar.png" class="lazy"/> عربي   </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top bar section -->
    <!-- Webpage top menu section start -->
    <div class="tm-menu-box">
        <div style="height: 70px;" class="uk-sticky-placeholder">
            <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                <div class="uk-container uk-container-center">
                    <a class="tm-logo uk-float-left" href="index.php">
                        <img src="/site/images/logo.png" class="lazy" alt="logo" title="logo">
                        <span>AL KHOR SPORTS CLUB<br/>
                  <span class="fontstile">Inspired by the history for the future wins!</span></span>
                    </a>@php $current='';@endphp
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li class="{{isActiveRouteSite('home')}}"><a href="{{route('home')}}">Home</a></li>
                        <li class="{{areActiveRoutesSite(['welcoming-letter','board-and-management','al-khor-sc','history','hall-of-fame','mission-vision-and-values','opportunities'])}}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                            <a href="#">About Club</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li class="{{isActiveRouteSite('welcoming-letter')}}"><a href="{{route('welcoming-letter')}}">Welcoming letter</a></li>
                                            <li class="{{isActiveRouteSite('board-and-management')}}"><a href="{{route('board-and-management')}}">The Board and management</a></li>
                                            <li class="{{isActiveRouteSite('al-khor-sc')}}"><a href="{{route('al-khor-sc')}}">Al Khor SC in the community</a></li>
                                            <li class="{{isActiveRouteSite('history')}}"><a href="{{route('history')}}">History</a></li>
                                            <li class="{{isActiveRouteSite('hall-of-fame')}}"><a href="{{route('hall-of-fame')}}">Hall of fame</a></li>
                                            <li class="{{isActiveRouteSite('mission-vision-and-values')}}"><a href="{{route('mission-vision-and-values')}}">Mission, vision and values</a></li>
                                            <li class="{{isActiveRouteSite('opportunities')}}"><a href="{{route('opportunities')}}">Opportunities</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="{{areActiveRoutesSite(['media-news'])}}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                            <a href="#">Media Center</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li><a href="press-releases.php">Press releases</a></li>
                                            <li><a href="events-calendar.php">Events calendar</a></li>
                                            <li><a href="media-contacts.php">Contacts</a></li>
                                            <li class="{{isActiveRouteSite('media-news')}}"><a href="{{route('media-news')}}">News</a></li>
                                            <li><a href="download-area.php">Download area</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li <?php if($current == 'sports&teams') {echo 'class="uk-active uk-parent"';}?> class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                            <a href="#">Sports & Teams</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li><a href="sports-athletics.php">Athletics</a></li>
                                            <li><a href="football-grassroots-academy.php">Football Grassroots Academy</a></li>
                                            <li><a href="handball.php">Handball</a></li>
                                            <li><a href="table-tennis.php">Table tennis</a></li>
                                            <li><a href="basketball.php">Basketball</a></li>
                                            <li><a href="futsal.php">Futsal</a></li>
                                            <li><a href="swimming.php">Swimming</a></li>
                                            <li><a href="volleyball.php">Volleyball</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="{{areActiveRoutesSite(['football-team','football-team-management','football-team-players'])}}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                            <a href="#">Football</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li class="{{isActiveRouteSite('football-team')}}"><a href="{{route('football-team')}}">Team</a></li>
                                            <li><a href="football-ticket-service.php">Ticket service</a></li>
                                            <li><a href="football-standings-and-statistics.php">Standings and statistics</a></li>
                                            <li class="{{isActiveRouteSite('football-fanclub')}}"><a href="{{route('football-fanclub')}}">Fan Club</a></li>
                                            <li class="{{isActiveRouteSite('football-fixtures')}}"><a href="{{route('football-fixtures')}}">Fixtures</a></li>
                                            <li class="{{isActiveRouteSite('football-rewards')}}"><a href="{{route('football-rewards')}}">Football rewards</a></li>
                                            <li><a href="#">Watch Live</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li <?php if($current == 'sports&leisure') {echo 'class="uk-active uk-parent"';}?> class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                            <a href="#">Sports & leisure</a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-1-1">
                                        <ul class="uk-nav uk-nav-navbar">
                                            <li><a href="interactive-map.php">Interactive map</a></li>
                                            <li><a href="swimming-pool-and-gym.php">Swimming pool and GYM</a></li>
                                            <li><a href="sport-facilities-outdor.php">Sport facilities</a></li>
                                            <li><a href="e-shop.php">E-shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li <?php if($current == 'contactus') {echo 'class="uk-active uk-parent"';}?>><a href="contact-us.php">Contact</a></li>
                    </ul>
                    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Webpage top menu section start -->
    <!-- THIS MENU FOR MOBILE VERSION -->
    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <script src="/site/js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript" src="/site/js/script.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $("#menu").accordion();
                    $(".colors a").click(function() {
                        if ($(this).attr("class") != "default") {
                            $("#menu").removeClass();
                            $("#menu").addClass("menu").addClass($(this).attr("class"));
                        } else {
                            $("#menu").removeClass();
                            $("#menu").addClass("menu");
                        }
                    });
                });
            </script>
            <div id="mobilemenu">
                <div class="mobilemnulogo">
                    <a href="index.php"><img src="/site/images/footer-logo.png" class="lazy" alt=""></a>
                </div>
                <ul class="h-social mobilesocialmedia">
                    <li><a href="https://www.instagram.com/alkhor.club/" target="_blank"><img src="/site/images/Insta.png" alt="" width="25" height="25"></a></li>
                    <li><a href="https://www.facebook.com/alkhorclub" target="_blank"><img src="/site/images/soc-facebook.png" alt="" width="25" height="25"></a></li>
                    <li><a href="https://www.youtube.com/user/AlKhorSportsClub" target="_blank"><img src="/site/images/soc-youtube.png" alt="" width="25" height="25"></a></li>
                    <li><a href="https://twitter.com/alkhor_club" target="_blank"><img src="/site/images/soc-twitter.png" alt="" width="25" height="25"></a></li>
                    <li><a href="#" target="_blank"><img src="/site/images/soc-google.png" alt="" width="24" height="24"></a></li>
                    <li><a href="https://www.snapchat.com/add/alkhorsc" target="_blank"><img src="/site/images/snapcode-300x300.png" alt="" width="25" height="25"></a></li>
                    <li><a href="https://telegram.me/alkhorclub" target="_blank"><img src="/site/images/unnamed.png" alt="" width="25" height="25"></a></li>
                </ul>
                <div id="custom-search-input">
                    <div class="input-group col-md-12 rull">
                        <input type="text" class="  search-query form-control" placeholder="Search" />
                        <span class="input-group-btn">
                     <button class="btn btn-danger" type="button">
                     <span class=" glyphicon glyphicon-search"></span>
                     </button>
                     </span>
                    </div>
                </div>
                <div class="content">
                    <nav>
                        <div id="menu" class="menu">
                            <ul>
                                <li <?php if($current == 'homepage') {echo 'class="active"';}?>><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                                <li <?php if($current == 'aboutclub') {echo 'class="active"';}?>>
                                    <a href="#"><i class="fa fa-users"> </i>About Club</a>
                                    <ul class="submenu">
                                        <li><a href="welcoming-letter.php"> Welcome Letter</a></li>
                                        <li><a href="the-board-and-management.php"> Board & Management</a></li>
                                        <li><a href="al-khor-sc.php"> Al Khor SC in the community</a></li>
                                        <li><a href="history.php"> History</a></li>
                                        <li><a href="hall-of-fame.php"> Hall of fame</a></li>
                                        <li><a href="mission-vision-and-values.php"> Mission, vision and values</a></li>
                                        <li><a href="opportunities.php"> Opportunities</a></li>
                                    </ul>
                                </li>
                                <li <?php if($current == 'mediacenter') {echo 'class="active"';}?>>
                                    <a href="#"><i class="fa fa-newspaper-o"> </i>Media Center</a>
                                    <ul class="submenu">
                                        <li><a href="press-releases.php"> Press Releases</a></li>
                                        <li><a href="events-calendar.php"> Events Calendar </a></li>
                                        <li><a href="media-contacts.php"> Contacts </a></li>
                                        <li><a href="media-news.php"> News </a></li>
                                        <li><a href="download-area.php"> Download Area </a></li>
                                    </ul>
                                </li>
                                <li <?php if($current == 'sports&teams') {echo 'class="active"';}?>>
                                    <a href="#"><i class="fa fa-file-image-o"> </i>Sports and Teams  </a>
                                    <ul class="submenu">
                                        <li><a href="sports-athletics.php">Athletics</a></li>
                                        <li><a href="football-grassroots-academy.php">Football Grassroots Academy</a></li>
                                        <li><a href="handball.php">Handball</a></li>
                                        <li><a href="table-tennis.php">Table tennis</a></li>
                                        <li><a href="basketball.php">Basketball</a></li>
                                        <li><a href="futsal.php">Futsal</a></li>
                                        <li><a href="swimming.php">Swimming</a></li>
                                        <li><a href="volleyball.php">Volleyball</a></li>
                                    </ul>
                                </li>
                                <li <?php if($current == 'footballteam') {echo 'class="active"';}?>>
                                    <a href="#"><i class="fa fa-futbol-o"> </i>Football  </a>
                                    <ul class="submenu">
                                        <li><a href="football-team.php">Team</a></li>
                                        <li><a href="football-ticket-service.php">Ticket service</a></li>
                                        <li><a href="football-standings-and-statistics.php">Standings and statistics</a></li>
                                        <li><a href="football-fanclub.php">Fan Club</a></li>
                                        <li><a href="football-fixtures.php">Fixtures</a></li>
                                        <li><a href="football-rewards.php">Football rewards</a></li>
                                        <li><a href="#">Watch Live</a></li>
                                    </ul>
                                </li>
                                <li <?php if($current == 'sports&leisure') {echo 'class="active"';}?>>
                                    <a href="#"><i class="fa fa-area-chart"> </i>Sports and Leisure  </a>
                                    <ul class="submenu">
                                        <li><a href="interactive-map.php">Interactive map</a></li>
                                        <li><a href="swimming-pool-and-gym.php">Swimming pool and GYM</a></li>
                                        <li><a href="sport-facilities-outdor.php">Sport facilities</a></li>
                                        <li><a href="e-shop.php">E-shop</a></li>
                                    </ul>
                                </li>
                                <li <?php if($current == 'contactus') {echo 'class="active"';}?>><a href="#"><i class="fa fa-envelope"> </i> Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @yield('body')

    <div class="bottom-wrapper">
        <div class="tm-bottom-f-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="footer-logo">
                                <a href="#"><img src="/site/images/footer-logo.png" class="lazy" alt=""></a>
                            </div>
                            <div class="footer-socials">
                                <ul class="h-social">
                                    <li><a href="https://www.instagram.com/alkhor.club/" target="_blank"><img src="/site/images/Insta.png" alt="" width="25" height="25"></a></li>
                                    <li><a href="https://www.facebook.com/alkhorclub" target="_blank"><img src="/site/images/soc-facebook.png" alt="" width="25" height="25"></a></li>
                                    <li><a href="https://www.youtube.com/user/AlKhorSportsClub" target="_blank"><img src="/site/images/soc-youtube.png" alt="" width="25" height="25"></a></li>
                                    <li><a href="https://twitter.com/alkhor_club" target="_blank"><img src="/site/images/soc-twitter.png" alt="" width="25" height="25"></a></li>
                                    <li><a href="#" target="_blank"><img src="/site/images/soc-google.png" alt="" width="24" height="24"></a></li>
                                    <li><a href="https://www.snapchat.com/add/alkhorsc" target="_blank"><img src="/site/images/snapcode-300x300.png" alt="" width="25" height="25"></a></li>
                                    <li><a href="https://telegram.me/alkhorclub" target="_blank"><img src="/site/images/unnamed.png" alt="" width="25" height="25"></a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <p class="footer-about-text">
                                Al Khor Sports Club was unofficially established in 1951 by oil workers to fulfill them with the appropriate sport facilities. The club was re-established in 1961 and adopted football as its primary sport, as well other recreational sports and activities.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-bottom-g-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div class="uk-panel">
                            <div class="match-list-wrap foot">
                                <div id="carusel-7" class="uk-slidenav-position" data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                    <div class="last-match-top">
                                        <div class="last-match-title">Last match</div>
                                        <div class="footer-slider-btn">
                                            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <ul class="uk-slideshow">
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo-al_arabi.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Al Arabi
                                                    </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">
                                                        Al Khor
                                                    </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="" aria-hidden="true">
                                            <div class="match-list-item alt foot">
                                                <div class="wrapper">
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/clubs/logo_al_sailiya.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <div class="team-name">
                                                        Al Sailiya
                                                    </div>
                                                    <div class="versus">VS</div>
                                                    <div class="team-name">
                                                        Al Khor
                                                    </div>
                                                    <div class="logo">
                                                        <a href="#">
                                                            <img src="/site/images/logo.png" class="img-polaroid lazy" alt="" title="">
                                                        </a>
                                                    </div>
                                                    <a class="read-more" href="#">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-large-1-2">
                        <div  class="uk-panel">
                            <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                    <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                        <div class="acymailing_module_form">
                                            <div class="mail-title">Newsletters</div>
                                            <div class="acymailing_introtext">Suspendisse sodales, magna at dignissim cursus, velit ex porttitor eros.</div>
                                            <div class="clear"></div>
                                            <div class="space"></div>
                                            <table class="acymailing_form">
                                                <tbody>
                                                <tr>
                                                    <td class="acyfield_email acy_requiredField">
                                          <span class="mail-wrap">
                                          <input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Enter your email') this.value = '';" onblur="if(this.value=='') this.value='Enter your email';" class="inputbox" name="user[email]" style="width:80%" value="Enter your email" title="Enter your email" type="text">
                                          </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="acysubbuttons">
                                          <span class="submit-wrap">
                                          <span class="submit-wrapper">
                                          <input class="button subbutton btn btn-primary" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
                                          </span>
                                          </span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer id="tm-footer" class="tm-footer">
            <div class="uk-panel">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="footer-wrap">
                                <div class="foot-menu-wrap">
                                    <ul class="nav menu">
                                        <li class="item-165"><a href="history.php">About</a>
                                        </li>
                                        <li class="item-166"><a href="players.php">Players</a>
                                        </li>
                                        <li class="item-167"><a href="match-list.php">Match</a>
                                        </li>
                                        <li class="item-168"><a href="results.php">Results</a>
                                        </li>
                                        <li class="item-169"><a href="news.php">News</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="copyrights">Copyright © 2018 <a href="#">Al Khor Sports Club</a>. Designed By <a href="#">Qweb.qa</a></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</div>
<script type="text/javascript" src="/site/js/lazyload.js"></script>
<script>
    $(function() {
        $("img.lazy").lazyload();
    });
</script>
<!-- Thsi lumos script for custom poupimage -->
<script type="text/javascript" src="/site/js/jquery.min.js"></script>
<script type="text/javascript" src="/site/js/lumos.js"></script>
<!-- Thsi lumos script for custom poupimage end -->
<script type="text/javascript" src="/site/js/jquery.js"></script>
<script type="text/javascript" src="/site/js/uikit.js"></script>
<script type="text/javascript" src="/site/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/site/js/components/grid.js"></script>
<script type="text/javascript" src="/site/js/components/slider.js"></script>
<script type="text/javascript" src="/site/js/components/slideshow.js"></script>
<script type="text/javascript" src="/site/js/components/slideset.js"></script>
<script type="text/javascript" src="/site/js/components/sticky.js"></script>
<script type="text/javascript" src="/site/js/components/lightbox.js"></script>
<script type="text/javascript" src="/site/js/theme.js"></script>
<script type="text/javascript" src="/site/js/jquery.min.2.2.2.js"></script>
<script type="text/javascript" src="/site/js/grt-youtube-popup.js"></script>
<!-- Initialize GRT Youtube Popup plugin -->
<!-- this scripts for image filtering plugin -->
<script type="text/javascript" src="/site/js/isotope.pkgd.min.js"></script>
<script >$(window).load(function () {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '.current',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false } });
        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false } });
            return false;
        });
        $("document").ready(function() {
            $(".current").trigger('click');
        });

    });

</script>
<!-- this scripts for image filtering plugin end-->
<!-- This script for vido youtube popup  -->
<script>
    $(".youtube-link").grtyoutube({
        autoPlay:true
    });
</script>
@stack('scripts')
</body>
</html>