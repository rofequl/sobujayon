<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>সবুজায়ন</title>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/icon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets/frontend/images/apple-touch-icon.png')}}"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/frontend/images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/frontend/images/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('assets/frontend/images/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120"
          href="{{asset('assets/frontend/images/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('assets/frontend/images/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{asset('assets/frontend/images/apple-touch-icon-152x152.png')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/rs-plugin/css/settings.css')}}"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/style.css')}}">
    <!--for slider -->

    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick-theme.css')}}"/>
    <script src="{{asset('assets/frontend/js/jquery-1.12.4.min.js')}}"></script>

    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/custom.css')}}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- COLORS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/nouislider.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/search/style.css')}}"/>
    @stack('style')

</head>
<body>

<div id="loader">
    <div class="loader-container">
        <img src="{{asset('assets/frontend/images/load.gif')}}" alt="" class="loader-site spinner">
    </div>
</div>

<div id="wrapper">

    @include('frontend.inc.header')
    @yield('content')
    @include('frontend.inc.footer')

</div>


<script src="{{asset('assets/frontend/js/nouislider.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/frontend/search/main.js')}}"></script>

<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.j')}}s"></script>
<script src="{{asset('assets/frontend/js/retina.js')}}"></script>
<script src="{{asset('assets/frontend/js/parallax.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/frontend/js/carousel.js')}}"></script>
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>
<!-- SLIDER REV -->
<script src="{{asset('assets/frontend/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 600,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview2",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [10, 7, 4, 3, 2, 5, 4, 3, 2, 1],
                parallaxDisableOnMobile: "off",
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ""
            });
    });
</script>

<script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-ui-timepicker-addon.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap-select.js')}}"></script>
<script type="text/javascript">
    (function ($) {
        "use strict";
        $('.selectpicker').selectpicker();
        $("#datepicker").datepicker();
    })(jQuery);
</script>

<script type="text/javascript" src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
<script type="text/javascript">
    $('#slid').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrrow: false,
        center: true,
        autoplaySpeed: 2000
    });
</script>
@stack('script')
</body>

</html>
