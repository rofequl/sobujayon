<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <!-- Image Logo -->
                <a href="{{route('admin')}}" class="logo">
                    <!--<img src="assets/images/log.png" alt="" height="22" class="logo-small">-->
                    <img src="{{asset('assets/admin/images/dabur.png')}}" alt="" height="60" class="logo-large">
                </a>
                <!-- Text Logo -->
                <a href="{{route('admin')}}" class="logo">
                    সবুজায়ন
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">

                <ul class="list-inline float-right mb-0">

                    <!-- notification-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                           role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-info badge-pill noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Notification (3)</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b>
                                    <small class="text-muted">Dummy text of the printing and typesetting industry.
                                    </small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details"><b>New Message received</b>
                                    <small class="text-muted">You have 87 unread messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b>
                                    <small class="text-muted">It is a long established fact that a reader will
                                    </small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                View All
                            </a>

                        </div>
                    </li>
                    <!-- User-->
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                           href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('assets/admin/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            <span class="ml-1">Denish J. <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><span
                                    class="badge badge-success pull-right m-t-5">5</span><i
                                    class="dripicons-gear text-muted"></i> Settings</a>
                            <a class="dropdown-item" href="register.html"><i class="dripicons-lock text-muted"></i>registration
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                               href="/"><i class="dripicons-exit text-muted"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                                <input type="hidden" name="type" value="admin">
                            </form>
                        </div>
                    </li>
                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{route('admin')}}"><i class="dripicons-device-desktop"></i>Super Admin</a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('AdminCategoryList')}}"><i class="dripicons-suitcase"></i> Catagory <i
                                class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{route('AdminCategoryList')}}">All Category</a></li>
                                    <li><a href="{{route('AdminCategory')}}">Category add</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('AdminSubcategoryList')}}"><i class="dripicons-suitcase"></i>Sub Catagory <i
                                class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{route('AdminSubcategoryList')}}">All Sub Category</a></li>
                                    <li><a href="{{route('AdminSubcategory')}}">Sub Category add</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('AdminBrandList')}}"><i class="dripicons-suitcase"></i>Brand <i
                                class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{route('AdminBrandList')}}">All Brand</a></li>
                                    <li><a href="{{route('AdminBrand')}}">Brand add</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="{{route('AdminBrandList')}}"><i class="dripicons-suitcase"></i>Nursery <i
                                class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="{{route('AdminNurseryList')}}">All Nursery user</a></li>
                                    <li><a href="{{route('AdminNursery')}}">Nursery user add</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="dripicons-suitcase"></i> Product management <i
                                class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="Sold%20Product.html">Sold Product </a></li>
                                    <li><a href="Unsold-Product.html">Unsold Product</a></li>
                                    <li><a href="{{route('AdminUnapprovedProduct')}}">Product Unapproved</a></li>
                                    <li><a href="{{route('AdminApprovedProduct')}}">Product Approved</a></li>
                                    <li><a href="Reporting.html">Reporting</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
