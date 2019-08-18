<div class="topbar clearfix">
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-6 text-left">
                <div class="social">
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i
                            class="fa fa-facebook"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i
                            class="fa fa-twitter"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i
                            class="fa fa-google-plus"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i
                            class="fa fa-linkedin"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i
                            class="fa fa-youtube"></i></a>
                    <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i
                            class="fa fa-pinterest"></i></a>
                </div><!-- end social -->
            </div><!-- end left -->
            <div class="col-md-6 text-right">
                <p>
                    <strong style="color: white"><i class="fa fa-phone"></i></strong> +90 543 123 45 67 &nbsp;&nbsp;
                    <strong style="color: white"><i class="fa fa-envelope"></i></strong> <a
                        href="mailto:info@yoursite.com">info@yoursite.com</a>
                </p>
            </div><!-- end left -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<div id="wrapper" class="border sticky-top"
     style="position: -webkit-sticky; position: sticky;top: 0;z-index: 1020;">
    <div class="container-fluid"
         style=" padding:0.4em 0.3em;background:#eaeaea; text-align:center; width: 100%; ">
        <div class="row">
            <div class="col-md-3 text-left">
                <a href="index.html"><img
                        style="background-position: center; margin-left: 90px; padding-top: 10px;"
                        src="{{asset('assets/frontend/upload/logo.png')}}"></a>
            </div>
            <div class="col-md-6 text-left" style="padding-top:25px ">
                <div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div><!-- end left -->
            <div class="col-md-1 text-right">
                <img
                    style="background-position: center; margin-right: 200px; margin-left: 50px;  padding-top: 20px;"
                    src="{{asset('assets/frontend/upload/cart%20(7).ico')}}">
                <div style="
    background: red;
    color: white;
    padding: 5px;
    border-radius: 27%;
    margin-right: -39px;
    margin-top: -52px;
    width: 25px;
    float: right;
    z-index: 9990;
">{{Cart::count()}}
                </div>
            </div><!-- end left -->
            <div class="col-md-1 text-right">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <img
                            style="background-position: center; margin-left: 50px;  padding-top: 20px;"
                            class="dropdown-toggle" data-toggle="dropdown" role="button"
                            src="{{asset('assets/frontend/upload/login.png')}}">
                        @if(Auth::guard('user')->check())<p style="margin-top: -33px;margin-right: -18px;">
                            {{Auth::guard('user')->user()->name}}
                        </p>@endif
                    </li>
                </ul>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<header class="header">
    <div class="container">
        <div class="row mb-5" style="padding-top: 12px; margin-left: 80px">
            <div class="col-md-12">
                <nav class="navbar yamm navbar-default">
                    <div class="container-full">
                        <div class="navbar-table">
                            <div class="navbar-cell">
                                <div class="navbar-header">

                                    <!--<div class="search">-->
                                    <!--<form>-->
                                    <!--<input   type="text" id="myInput">-->
                                    <!--<input type="submit" value="" >-->
                                    <!--</form>-->
                                    <!--</div>-->
                                    <div>
                                        <button type="button" class="navbar-toggle collapsed"
                                                data-toggle="collapse"
                                                data-target="#bs-example-navbar-collapse-2">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                </div><!-- end navbar-header -->
                            </div><!-- end navbar-cell -->
                            <div class="navbar-cell stretch pull-right">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                    <div class="navbar-cell">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown has-submenu">
                                                <a href="{{route('home')}}">Home</a>
                                            </li>
                                            <li class="dropdown has-submenu">
                                                <a href="{{route('shop')}}">Shop</a>
                                            </li>
                                            <li class="dropdown has-submenu">
                                                <a href="{{route('shop')}}">Checkout</a>
                                            </li>
                                            <li class="dropdown has-submenu">
                                                <a href="{{route('shop')}}">Contact</a>
                                            </li>
                                            <li class="dropdown has-submenu">
                                                <a href="{{route('login.user')}}">Login</a>
                                            </li>
                                            <li class="dropdown has-submenu">
                                                <a href="{{route('register.user')}}">Register</a>
                                            </li>

                                        </ul>
                                    </div><!-- end navbar-cell -->
                                </div><!-- /.navbar-collapse -->
                            </div><!-- end navbar cell -->
                        </div><!-- end navbar-table -->
                    </div><!-- end container fluid -->
                </nav><!-- end navbar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</header>
