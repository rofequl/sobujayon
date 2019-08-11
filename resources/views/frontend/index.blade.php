@extends('frontend.layout.app')
@section('content')






    <div class="slider-section">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/22.jpg"
                        data-saveperformance="off" data-title="Garden">
                        <img src="{{asset('assets/frontend/upload/22.jpg')}}" alt="fullslide1"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="230"
                             data-speed="1000"
                             data-start="800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Dress Up
                            Your Home for Sparkling Holidays
                        </div>
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="295"
                             data-speed="1000"
                             data-start="1200"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Welcome to
                            the Garden Shop
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/22.jpg"
                        data-saveperformance="off" data-title="Garden">
                        <img src="{{asset('assets/frontend/upload/22.jpg')}}" alt="fullslide1"
                             data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="230"
                             data-speed="1000"
                             data-start="800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">A Great
                            Theme For Garden Shop
                        </div>
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                             data-x="center"
                             data-y="295"
                             data-speed="1000"
                             data-start="1200"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">designing
                            your dream garden
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section grey">
        <div class="container">
            <div class="general-title text-center">
                <h4>What We Offer</h4>
                <p class="lead">Listed below four reasons to choose us!</p>
                <hr>
            </div><!-- end general title -->

            <div class="row module-wrapper text-center">
                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('assets/frontend/images/icons/12.jpg')}}" alt="" class="wow fadeIn">
                    <strong>garden watering systems</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('assets/frontend/images/icons/13.jpg')}}" alt="" class="wow fadeIn">
                    <strong>preparing landscape</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('assets/frontend/images/icons/14.jpg')}}" alt="" class="wow fadeIn">
                    <strong>garden fence</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 why-us">
                    <img src="{{asset('assets/frontend/images/icons/15.jpg')}}" alt="" class="wow fadeIn">
                    <strong>garden supplies</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur elit. Curabitur euismod enim a metus adipiscing
                        aliquam. </p>
                </div><!-- end col -->
            </div><!-- end module-wrapper -->

            <hr class="invis">


            @foreach($brand as $brands)
                <section class="container">
                    <div class="row">
                        <div class="col-md-12" id="text2">
                            <h1 style="color: #868686" id="text"><strong style="color: #e83427"></strong>
                                {{$brands->name}} </h1>
                        </div>
                    </div>
                </section>
                <div id="owl-sticky" class="row owl-sticky sticky-row">

                    @foreach($brands->product as)
                    <div class="col-4 sticky-col">
                        <div class="imageWrapper">
                            <img src="{{asset('storage/tree/'.$product->image)}}" alt="" class="img-responsive" style="height: 210px">
                        </div>
                        <div class="product-body">
                            <h4 style="color: green" class="product-price">&#2547;{{$product->price - $product->discount}}
                                <del class="product-old-price">&#2547;{{$product->price}}</del>
                            </h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">{{$product->name->name}}</a></h2>
                            <div class="product-btns">
                                <!--<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>-->
                                <!--<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>-->
                                <button onclick="window.location.href='shop-single.html'"
                                        class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach


        </div><!-- end container -->
    </section>



    </div>

@endsection
