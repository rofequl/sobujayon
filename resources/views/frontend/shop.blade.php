@extends('frontend.layout.app')
@section('content')


    <div class="page-title grey">
        <div class="container">
            <div class="title-area text-center">
                <h2>Shopping</h2>
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
            <div class="shop-top row clearfix">
                <div class="title-area pull-left">
                    <p>Showing {{($product->currentpage()-1)*$product->perpage()+1}}–
                        {{$product->currentpage()*$product->perpage()}} of {{$product->total()}} results</p>
                </div><!-- /.pull-right -->
                <div class="pull-right">
                    <select class="selectpicker" data-style="btn-primary">
                        <option value="menu_order">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                </div><!-- /.pull-right -->
            </div><!-- end shop top -->

            <div class="row">
                <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-wrapper">
                        <div class="row module-wrapper shop-layout text-center">

                            @foreach($product as $products)

                                <div class="col-md-4 col-sm-4 shop-item">
                                    <div class="entry">
                                        <img class="img-responsive" src="{{asset('storage/tree/'.$products->image)}}" style="height: 327.99px;width: 327.99px" alt="">
                                        <div class="magnifier">
                                        </div><!-- end magnifier -->
                                    </div><!-- end entry -->
                                    <div class="product-body">
                                        <h3 class="product-price">&#2547;{{$products->price - $products->discount}}
                                            <del class="product-old-price">&#2547;{{$products->price}}</del>
                                        </h3>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o empty"></i>
                                        </div>
                                        <h2 class="product-name"><a href="#">{{$products->name->name}}</a></h2>
                                        <div class="product-btns">
                                            <!--<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>-->
                                            <!--<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>-->
                                            <button onclick="window.location.href='shop-single.html'"
                                                    class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                                to Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            @endforeach


                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->

                    <hr class="invis">

                    <nav class="pagi clearfix text-center">
                        {{ $product->links() }}
                    </nav>
                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->



@endsection
