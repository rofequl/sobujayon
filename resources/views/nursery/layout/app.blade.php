<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') - সবুজায়ন</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{asset('assets/nursery/images/logo4.png')}}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('assets/nursery/plugins/morris/morris.css')}}">
@stack('style')
<!-- App css -->
    <link href="{{asset('assets/nursery/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/nursery/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/nursery/css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

@yield('content')
@include('nursery.inc.footer')

<!-- jQuery  -->
<script src="{{asset('assets/nursery/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/popper.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/bootstrap.min.j')}}s"></script>
<script src="{{asset('assets/nursery/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/waves.js')}}"></script>
<script src="{{asset('assets/nursery/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/nursery/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/nursery/js/jquery.scrollTo.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets/nursery/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/nursery/plugins/raphael/raphael-min.js')}}"></script>
@stack('script')
<script src="{{asset('assets/nursery/pages/dashborad.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/nursery/js/app.js')}}"></script>

</body>


</html>
