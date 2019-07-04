<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Al Khor Sports Club Admin</title>

    <link rel="apple-touch-icon" sizes="57x57" href="/build/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/build/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/build/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/build/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/build/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/build/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/build/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/build/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/build/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/build/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/build/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/build/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/build/favicon-16x16.png">
    <link rel="manifest" href="/build/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/build/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/build/css/lib/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="/build/css/separate/vendor/lobipanel.min.css">
    <link rel="stylesheet" href="/build/css/lib/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="/build/css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="/build/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/build/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/build/css/main.css">

    <link rel="stylesheet" href="/build/css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="/build/css/separate/vendor/sweet-alert-animations.min.css">
    @stack('style')

</head>
<body class="with-side-menu control-panel control-panel-compact">

<header class="site-header">
    <div class="container-fluid">

        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="/build/img/logo-2.png" alt="">
            <img class="hidden-lg-up" src="/build/img/logo-2-mob.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                            <img src="/build/img/avatar-2-64.png" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            {{--<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>--}}
                            {{--<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>--}}
                            {{--<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>--}}
                            {{--<div class="dropdown-divider"></div>--}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--.container-fluid-->
</header><!--.site-header-->

<div class="mobile-menu-left-overlay"></div>

@include('backend.nav')
<div class="page-content">
    <div class="container-fluid">
        @yield('body')
    </div><!--.container-fluid-->
</div><!--.page-content-->


<script src="/build/js/lib/jquery/jquery.min.js"></script>
<script src="/build/js/lib/tether/tether.min.js"></script>
<script src="/build/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="/build/js/plugins.js"></script>

<script type="text/javascript" src="/build/js/lib/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/build/js/lib/lobipanel/lobipanel.min.js"></script>
<script type="text/javascript" src="/build/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script src="/build/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
    });
</script>
@stack('scripts')
<script src="/build/js/app.js"></script>
</body>
</html>