<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title') - সবুজায়ন</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images/logo4.png')}}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/morris/morris.css')}}">

@stack('style')

<!-- App css -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>


@yield('content')
@include('admin.inc.footer')


<!-- jQuery  -->
<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/admin/js/waves.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.scrollTo.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets/admin/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('assets/admin/pages/dashborad.js')}}"></script>

@stack('script')

<!-- App js -->
<script src="{{asset('assets/admin/js/app.js')}}"></script>
<script src="{{asset('assets/sweetalert/sweetalert.js')}}"></script>
</body>


</html>
