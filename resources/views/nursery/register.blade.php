<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>সবুজায়ন | Register</title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{asset("assets/nursery/images/favicon.ico")}}">

    <!-- App css -->
    <link href="{{asset("assets/nursery/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/nursery/css/icons.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/nursery/css/style.css")}}" rel="stylesheet" type="text/css"/>

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
                <a href="{{route('home')}}" class="logo logo-admin"><img
                        src="{{asset('assets/nursery/images/logo.png')}}" height=alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="text-primary font-18 m-b-5 text-center">Free Register</h4>
                <p class="text-primary text-center">Get your free fonik account now.</p>

                <form class="form-horizontal m-t-30" action="{{ route('register.nursery') }}"
                      aria-label="{{ __('Register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="useremail">Email</label>
                        <input type="email" name="email" value="{{ old('email')}}"
                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="useremail"
                               placeholder="Enter email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="name" value="{{ old('name')}}"
                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="username"
                               placeholder="Enter username">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" name="password"
                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="userpassword" placeholder="Enter password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group row m-t-20">
                        <div class="col-12 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <p class="font-500 font-14 text-primary font-secondary">By registering you agree to the
                                Fonik <a href="{{route('login.nursery')}}">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="m-t-40 text-center">
        <p>Already have an account ? <a href="login.html" class="font-500 font-14 text-primary font-secondary">
                Login </a></p>
        © 2019 সবুজায়ন - Crafted with <i class="mdi mdi-heart text-danger"></i> by nested co ltd.
    </div>
</div>


<!-- jQuery  -->
<script src="{{asset('assets/nursery/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/popper.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/nursery/js/waves.js')}}"></script>
<script src="{{asset('assets/nursery/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/nursery/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/nursery/js/jquery.scrollTo.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('assets/nursery/js/app.js')}}"></script>

</body>


</html>
