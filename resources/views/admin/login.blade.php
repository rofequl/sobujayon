<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>সবুজায়ন | Login</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.ico')}}">

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

<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="{{route('home')}}" class="logo logo-admin"><img src="{{asset('assets/admin/images/logo.png')}}" alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="text-primary font-18 m-b-5 text-center">Welcome Back !</h4>
                <p class="text-primary text-center">Sign in to continue to সবুজায়ন.</p>
                @if(!empty($errors->first('message')))
                    <div class="row col-lg-12">
                        <div class="alert alert-danger">
                            <span>{{ $errors->first('message') }}</span>
                        </div>
                    </div>
                @endif
                <form class="form-horizontal m-t-10" method="POST" action='{{route('login.admin')}}'
                      aria-label="{{ __('Login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username"
                               class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" id="username"
                               placeholder="Enter username" value="{{ old('username')}}">
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="userpassword" placeholder="Enter password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your
                                password?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center" style="color: orangered">
        <p>Don't have an account ? <a href="{{route('register.admin')}}" class="font-500 font-14 text-purple font-secondary"> Signup
                Now </a></p>
        © 2019 সবুজায়ন - Crafted with <i class="mdi mdi-heart text-danger"></i> by nested co ltd.
    </div>

</div>


<!-- jQuery  -->
<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/admin/js/waves.js')}}"></script>
<!--<script src="assets/js/jquery.slimscroll.js"></script>-->
<script src="{{asset('assets/admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.scrollTo.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/admin/js/app.js')}}"></script>

</body>


</html>
