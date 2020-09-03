<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--- Favicon --->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

    <!--- Icons css --->
    <link href="../assets/css/icons.css" rel="stylesheet">

    <!--- Right-sidemenu css --->
    <link href="../assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!--- Custom Scroll bar --->
    <link href="../assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--- Style css --->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet">

    <!--- Animations css --->
    <link href="../assets/css/animate.css" rel="stylesheet">

</head>
<body class="main-body bg-light">

<!-- Loader -->
<div id="global-loader">
    <img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- main-header opened -->
<div class="main-header nav nav-item hor-header">
    <div class="container">
        <div class="main-header-left ">
            <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
            <a class="header-brand" href="/dasboard">

                <img src="../assets/img/brand/logo-white.png" class="logo-white ">
                <img src="../assets/img/brand/logo.png" class="logo-default">
                <img src="../assets/img/brand/favicon-white.png" class="icon-white">
                <img src="../assets/img/brand/favicon.png" class="icon-default">
            </a>
            <div class="main-header-center  ml-4">
                <ul class="header-megamenu-dropdown  nav">


                </ul>
            </div>
        </div><!-- search -->
        <div class="main-header-right">

            <div class="nav nav-item  navbar-nav-right ml-auto">
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
                </div>


                <div class="dropdown main-profile-menu nav nav-item nav-link">
                    <a class="profile-user d-flex" href=""><img src="../assets/img/avatar.png" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- main-header closed -->



<main class="py-4">
            @yield('content')
        </main>
<div>

</div>
<!-- /container -->
</div>
<!-- /main-content -->
<!-- Footer opened -->
<div class="main-footer ht-40">
    <div class="container-fluid pd-t-0-f ht-100p">
        <span>Copyright © 2020 <a href="#">Whitetoken</a>.All rights reserved.</span>
    </div>
</div>
<!-- Footer closed -->

<!--- Back-to-top --->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<!--- JQuery min js --->
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!--- Datepicker js --->
<script src="../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

<!--- Bootstrap Bundle js --->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--- Ionicons js --->
<script src="../assets/plugins/ionicons/ionicons.js"></script>

<!--- Chart bundle min js --->
<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
<script src="../assets/plugins/chart.js/excanvas.js"></script>
<script src="../assets/plugins/chart.js/utils.js"></script>

<!--- Index js --->
<script src="../assets/js/index.js"></script>

<!--- JQuery sparkline js --->
<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!--- Internal Sampledata js --->
<script src="../assets/js/chart.flot.sampledata.js"></script>

<!--- Rating js --->
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="../assets/plugins/rating/jquery.barrating.js"></script>

<!--- Horizontalmenu js --->
<script src="../assets/plugins/horizontal-menu/horizontal-menu.js"></script>

<!--- Eva-icons js --->
<script src="../assets/js/eva-icons.min.js"></script>

<!--- Moment js --->
<script src="../assets/plugins/moment/moment.js"></script>

<!--- Perfect-scrollbar js --->
<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

<!--- Sticky js --->
<script src="../assets/js/sticky.js"></script>

<!--- Right-sidebar js --->
<script src="../assets/plugins/sidebar/sidebar.js"></script>
<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

<!--- Scripts js --->
<script src="../assets/js/script.js"></script>

<!--- Custom js --->
<script src="../assets/js/custom.js"></script>

</body>
</html>

</div>
