@extends('frontend.layout.app')
@section('content')


    <div class="page-title grey">
        <div class="container">
            <div class="title-area text-center">
                <h2>Single Shop</h2>
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Shop</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </div><!-- end page-title -->


    <section class="section white">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <!--CART STRAT-->
                            <div class="exzoom" id="exzoom">
                                <!-- Images -->
                                <div class="exzoom_img_box">
                                    <ul class='exzoom_img_ul'>
                                        <li><img src="{{asset('storage/tree/'.$product->image)}}"/></li>
                                        <li><img src="{{asset('storage/tree/'.$product->image2)}}"/></li>
                                        <li><img src="{{asset('storage/tree/'.$product->image3)}}"/></li>
                                        <li><img src="{{asset('storage/tree/'.$product->image4)}}"/></li>
                                        ...
                                    </ul>
                                </div>
                                <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
                                <div class="exzoom_nav"></div>
                                <!-- Nav Buttons -->
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                </p>
                            </div>
                            <!--CART END-->
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="shop-desc">
                                <h3>{{$product->name->name}}</h3>
                                <small>&#2547;{{$product->price - $product->discount}}</small>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>

                                <h4 style="font-family:'Galada' "> 0 people wishlist | {{$product->qty}} product
                                    has</h4>

                                <p>{{$product->short_description}}</p>

                                <a style="font-family:'Galada';font-size: large " href=""><img
                                        src="{{asset('assets/frontend/upload/35.png')}}">#1
                                    Best Seller</img><span>in </span><span
                                        class="cat-link"> Outdoor Recreation nursery</span></a>
                                <div class="clearfix">
                                    <div class="row" style="margin-top: 10px">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon btn btn-success plus"><i
                                                        class="fa fa-plus"></i></span>
                                                <input id="msg" type="number" class="form-control seat" name="msg"
                                                       placeholder="Product Quantity">
                                                <span class="input-group-addon btn btn-success minus"><i
                                                        class="fa fa-minus"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon btn btn-success plus1"><i
                                                        class="fa fa-plus"></i></span>
                                                <input id="msg" type="number" class="form-control seat1" name="msg"
                                                       placeholder="Building Floor">
                                                <span class="input-group-addon btn btn-success minus1"><i
                                                        class="fa fa-minus"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary add-cart" id="{{$product->id}}">Add to
                                            Cart</a>

                                        <div class="addwish">
                                            <a href="shop-wishlist.html"><i class="fa fa-heart-o"></i> Add to
                                                Wishlist</a>
                                        </div><!-- end addw -->
                                        <div class="shopmeta">
                                             <span><strong>Category:</strong> <a
                                                     href="#">{{$product->category->category}}</a></span>
                                            <span><strong>Brand:</strong> <a href="#">
                                            @if($product->brand_id)
                                                        @foreach(explode(',',$product->brand_id) as $brand)
                                                            {{get_brand_by_id($brand)->name}},
                                                        @endforeach
                                                    @endif
                                        </a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="margin-top: 30px">
                                            <div class="col-md-6 text-right" style="line-height: 43px;">
                                                Delivery Cost:
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control form-control-sm" value=""
                                                       readonly="">
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-6 text-right" style="line-height: 43px;">
                                                Lift Cost:
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control form-control-sm" value=""
                                                       readonly="">
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-md-6 text-right" style="line-height: 43px;">
                                                Total Cost:
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" value="" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end shopmeta -->

                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-style-1">
                                <div class="tabbed-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">Descriptions</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Reviews</a></li>
                                        <li><a data-toggle="tab" href="#menu2">Extras</a></li>
                                        <li><a data-toggle="tab" href="#menu3">What you will get</a></li>
                                        <li><a data-toggle="tab" href="#menu4">shipping</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <p><img src="{{asset('storage/tree/convert/'.$product->image)}}"
                                                    class="alignleft" alt=""> Lorem ipsum dolor sit
                                                {{$product->short_description}} </p>
                                            <br>
                                            <p>labore et dolore magna aliqua. amet, consectet, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor dipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua</p>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div id="reviews" class="feedbacks">
                                                <div>
                                                    <div class="well">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="users/avatar-1.jpg"
                                                                         alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">John DOE</h4>
                                                                <div class="time-comment clearfix">
                                                                    <small class="pull-left">21 Jun 2015</small>
                                                                    <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                                </div><!-- end time-comment -->
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla
                                                                    vel metus scelerisque ante sollicitudin commodo.
                                                                    Cras purus odio, vestibulum in vulputate at, tempus
                                                                    viverra turpis. Fusce condimentum nunc ac nisi
                                                                    vulputate fringilla. Donec lacinia congue felis in
                                                                    faucibus.</p>
                                                            </div>
                                                        </div><!-- end media -->

                                                        <div class="media comment-reply">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="users/avatar-2.jpg"
                                                                         alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Amanda FOXOE</h4>
                                                                <div class="time-comment clearfix">
                                                                    <small class="pull-left">21 Jun 2015</small>
                                                                    <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                                </div><!-- end time-comment -->
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla
                                                                    vel metus scelerisque ante sollicitudin commodo.
                                                                    Cras purus odio, vestibulum in vulputate at, tempus
                                                                    viverra turpis. Fusce condimentum nunc ac nisi
                                                                    vulputate fringilla. Donec lacinia congue felis in
                                                                    faucibus.</p>
                                                            </div>
                                                        </div><!-- end media -->

                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="users/avatar-3.jpg"
                                                                         alt="Generic placeholder image">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="media-heading">Mark BOBS</h4>
                                                                <div class="time-comment clearfix">
                                                                    <small class="pull-left">21 Jun 2015</small>
                                                                    <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                                </div><!-- end time-comment -->
                                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla
                                                                    vel metus scelerisque ante sollicitudin commodo.
                                                                    Cras purus odio, vestibulum in vulputate at, tempus
                                                                    viverra turpis. Fusce condimentum nunc ac nisi
                                                                    vulputate fringilla. Donec lacinia congue felis in
                                                                    faucibus.</p>
                                                            </div>
                                                        </div><!-- end media -->

                                                        <div class="widget-title">
                                                            <h4>Leave a Comment</h4>
                                                            <hr>
                                                        </div>
                                                        <div class="commentform">
                                                            <form>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Your name">
                                                                <input type="email" class="form-control"
                                                                       placeholder="Your email">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Your website">
                                                                <textarea type="text" class="form-control"
                                                                          placeholder="Message goes here"></textarea>
                                                                <input type="submit" value="Send Comment"
                                                                       class="btn btn-primary btn-block"/>
                                                            </form>
                                                        </div><!-- end newsletter -->
                                                    </div><!-- end well -->
                                                </div><!-- end collapse -->
                                            </div><!-- end reviews -->
                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                            <p><img src="upload/g.jpg" class="alignleft" alt=""> Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                                            <br>
                                            <p>labore et dolore magna aliqua. amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum
                                                dolor dipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua</p>
                                        </div>
                                        <div id="menu4" class="tab-pane fade">
                                            <p><img src="upload/g.jpg" class="alignleft" alt=""> Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                                            <br>
                                            <p style="font-family:'Galada'">Got questions? Call us at +31(0)20-7736303
                                                or request a demo.
                                                Enter your details in the form to request a live demo. One of our
                                                e-commerce delivery specialists will advise you on how to achieve your
                                                goals and take your delivery to the next level.
                                                Please note that Paazl is an enterprise solution which is no longer
                                                designed for small companies with a low volume of deliveries.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end tabbed-widget -->
                            </div><!-- end service-style-1 -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="general-title text-left">
                        <h4>Related Items</h4>
                        <p class="lead">Listed below our awesome shop items!</p>
                    </div><!-- end general title -->

                    <div class="row module-wrapper shop-layout text-center">
                        <div class="col-md-4 col-sm-4 shop-item">
                            <div class="entry">
                                <img class="img-responsive" src="upload/a.jpg" alt="">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                                class="fa fa-shopping-cart"></span></a>
                                        <a class="st" rel="bookmark" href="shop-single.html"><span
                                                class="fa fa-link"></span></a>
                                    </div>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="product-body">
                                <h3 class="product-price">$32.50
                                    <del class="product-old-price">$45.00</del>
                                </h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <!--<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>-->
                                    <!--<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>-->
                                    <button onclick="window.location.href='shop-single.html'"
                                            class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div><!-- end shop_item -->

                        <div class="col-md-4 col-sm-4 shop-item">
                            <div class="entry">
                                <img class="img-responsive" src="upload/e.jpg" alt="">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                                class="fa fa-shopping-cart"></span></a>
                                        <a class="st" rel="bookmark" href="shop-single.html"><span
                                                class="fa fa-link"></span></a>
                                    </div>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="product-body">
                                <h3 class="product-price">$32.50
                                    <del class="product-old-price">$45.00</del>
                                </h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <!--<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>-->
                                    <!--<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>-->
                                    <button onclick="window.location.href='shop-single.html'"
                                            class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div><!-- end shop_item -->

                        <div class="col-md-4 col-sm-4 shop-item">
                            <div class="entry">
                                <img class="img-responsive" src="upload/f.jpg" alt="">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st" rel="bookmark" href="shop-checkout.html"><span
                                                class="fa fa-shopping-cart"></span></a>
                                        <a class="st" rel="bookmark" href="shop-single.html"><span
                                                class="fa fa-link"></span></a>
                                    </div>
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="product-body">
                                <h3 class="product-price">$32.50
                                    <del class="product-old-price">$45.00</del>
                                </h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <div class="product-btns">
                                    <!--<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>-->
                                    <!--<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>-->
                                    <button onclick="window.location.href='shop-single.html'"
                                            class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                        Cart
                                    </button>
                                </div>
                            </div>
                        </div><!-- end shop_item -->
                    </div><!-- end row -->
                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


@endsection
@push('style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--single shop -->


    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('assets/frontend/js/jquery.exzoom.js')}}"></script>
    <link href="{{asset('assets/frontend/css/jquery.exzoom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@push('script')
    <script src="{{asset('assets/frontend/js/jquery.exzoom.js')}}"></script>
    <script src="{{asset('assets/sweetalert/sweetalert.js')}}"></script>

    <script src="{{asset('assets/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script type="text/javascript">
        (function ($) {
            "use strict";
            jQuery('a[data-gal]').each(function () {
                jQuery(this).attr('rel', jQuery(this).data('gal'));
            });
            jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
                animationSpeed: 'slow',
                theme: 'light_square',
                slideshow: true,
                overlay_gallery: true,
                social_tools: false,
                deeplinking: false
            });
        })(jQuery);
    </script>
    <!--cart-->
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(function () {
            $("#exzoom").exzoom({
                "navWidth": 60,
                "navHeight": 60,
                "navItemNum": 5,
                "navItemMargin": 7,
                "navBorder": 1,
                "autoPlay": false,
                "autoPlayTimeout": 2000
            });
        });
        $(document).ready(function () {
            $(function () {
                $(".plus").click(function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $(".seat");
                    var value = parseInt($input.val());
                    if (value < {{$product->qty}}) {
                        value = value + 1;
                    } else {
                        value = 1;
                    }
                    $input.val(value);
                });
                $(".minus").click(function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $(".seat");
                    var value = parseInt($input.val());
                    if (value > 1) {
                        value = value - 1;
                    } else {
                        value = 1;
                    }
                    $input.val(value);
                });
            });

            $(function () {
                $(".plus1").click(function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $(".seat1");
                    var value = parseInt($input.val());
                    if (value < 100) {
                        value = value + 1;
                    } else {
                        value = 1;
                    }
                    $input.val(value);
                });
                $(".minus1").click(function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $(".seat1");
                    var value = parseInt($input.val());
                    if (value > 1) {
                        value = value - 1;
                    } else {
                        value = 1;
                    }
                    $input.val(value);
                });
            });

            $(document).on('click', '.add-cart', function () {
                event.preventDefault();
                let id = $(this).attr('id');
                var $input = $(".seat");
                var value = parseInt($input.val());
                $.ajax({
                    url: '{{route('AddCart')}}',
                    type: 'post',
                    data: {_token: CSRF_TOKEN, id: id, qty: value},
                    success: function (response) {
                        if (response == 1) {
                            swal({
                                title: "",
                                text: "Item is already in your cart",
                                type: "warning",
                            });
                        } else if (response == 2) {
                            swal({
                                title: "",
                                text: "Item quantity update",
                                type: "success",
                            });
                        } else if (response == 3) {
                            swal({
                                title: "",
                                text: "Item has been moved to cart",
                                type: "success",
                            });
                        } else {
                            swal({
                                title: "Error",
                                text: "Something wrong, please try again later",
                                type: "warning",
                            });
                        }
                    }
                });

            });
            total_cost();

            function total_cost() {
                let quantity = parseInt($(".seat").val());
                let lift = parseInt($(".seat1").val());
                let id = parseInt('{{$product->id}}');
                $.ajax({
                    url: '{{route('TotalCost')}}',
                    type: 'post',
                    data: {_token: CSRF_TOKEN, id:id, lift: lift, qty: quantity},
                    success: function (response) {
                        console.log(response);
                    }
                });
            }
        });

    </script>
@endpush
