@extends('nursery.layout.app')
@section('title','Add Product')
@section('content')


    <div class="header-bg">

        @include('nursery.inc.header')

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <form class="float-right app-search">
                            <input type="text" placeholder="Search..." class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <h4 class="page-title"><i class="dripicons-box"></i>Add my Product </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-4">
                        <div class="card-body">
                            <div class="table-rep-plugin">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <!--<table id="tech-companies-1" class="table  table-striped">-->
                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                           cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th> SL</th>
                                            <th> Product name</th>
                                            <th> Category</th>
                                            <th>sub Category</th>
                                            <th>Brand</th>
                                            <th>Color</th>
                                            <th> Age</th>
                                            <th>Item Weight</th>
                                            <th>Height & width</th>
                                            <th> Discount</th>
                                            <th>Price</th>
                                            <th>profit margin</th>
                                            <th>Qty</th>
                                            <th>Origin country</th>
                                            <th>temperature</th>
                                            <th>what you will get</th>
                                            <th>Gift</th>
                                            <th>Image</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $products)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$products->name->name}}</td>
                                                <td>{{$products->category->category}}</td>
                                                <td>{{$products->subcategory->subcategory}}</td>
                                                <td>
                                                    @if($products->brand_id)
                                                        @foreach(explode(',',$products->brand_id) as $brand)
                                                            {{get_brand_by_id($brand)->name}},
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{$products->color}}</td>
                                                <td>{{$products->age->age}}</td>
                                                <td>{{$products->item_weight->weight}}</td>
                                                <td>{{$products->height->height.' & '.$products->width->width}}</td>
                                                <td>{{$products->price}}</td>
                                                <td>{{$products->discount}}</td>
                                                <td>{{$products->profit_margin}}</td>
                                                <td>{{$products->qty}}</td>
                                                <td>{{$products->origin_country->country}}</td>
                                                <td>{{$products->temperature->temperature}}</td>
                                                <td>{{$products->what_you_will_get}}</td>
                                                <td>{{$products->gift}}</td>
                                                <td><img class="rounded-circle" height="100" width="100" alt="200x200"
                                                         src="{{asset('storage/tree/'.$products->image)}}"
                                                         data-holder-rendered="true"></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

@endsection
@push('style')

@endpush

@push('script')


@endpush

