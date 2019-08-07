@extends('admin.layout.app')
@section('title','Pending Product')
@section('content')
    <div class="header-bg">

        @include('admin.inc.header')

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <form class="float-right app-search">
                            <input type="text" placeholder="Search..." class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <h4 class="page-title"><i class="dripicons-blog"></i>Pending Product</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h1 class="text-center">Nursaery Product</h1>
                            <hr>
                            <div class="col-md-8 offset-3">
                                <img class="rounded mr-2" alt="200x200" width="150" height="150"
                                     src="{{asset('storage/tree/'.$product->image)}}" data-holder-rendered="true">
                                <img class="rounded mr-2" alt="200x200" width="150" height="150"
                                     src="{{asset('storage/tree/'.$product->image2)}}" data-holder-rendered="true">
                                <img class="rounded mr-2" alt="200x200" width="150" height="150"
                                     src="{{asset('storage/tree/'.$product->image3)}}" data-holder-rendered="true">
                                <img class="rounded mr-2" alt="200x200" width="150" height="150"
                                     src="{{asset('storage/tree/'.$product->image4)}}" data-holder-rendered="true">
                            </div>
                            <div class="col-md-8 offset-2">
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                                       width="100%">
                                    <tr>
                                        <th>Product name</th>
                                        <td> {{$product->name->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td> {{$product->category->category}}</td>
                                    </tr>
                                    <tr>
                                        <th>sub Category</th>
                                        <td>{{$product->subcategory->subcategory}}</td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td>{{$product->color}}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td> {{$product->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Discount Price</th>
                                        <td> {{$product->discount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Qty</th>
                                        <td> {{$product->qty}}</td>
                                    </tr>
                                    <tr>
                                        <th>Delivery Charge</th>
                                        <td> {{$product->color}}</td>
                                    </tr>
                                    <tr>
                                        <th>Origin country</th>
                                        <td> {{$product->origin_country->country}}</td>
                                    </tr>
                                    <tr>
                                        <th>temperature</th>
                                        <td> {{$product->temperature}}</td>
                                    </tr>
                                    <tr>
                                        <th>Warranty & Support</th>
                                        <td> {{$product->warranty}}</td>
                                    </tr>
                                    <tr>
                                        <th>Suggested related Item</th>
                                        <td> {{$product->related_item}}</td>
                                    </tr>
                                </table>


                                <div class="button-items">
                                    @if($product->status == 0)
                                        <button type="button"
                                                onclick="window.location.href='{{route('AdminProductStatus','approve='.base64_encode($product->id))}}'"
                                                class="btn btn-primary btn-lg btn-block waves-effect waves-light">
                                            Approve
                                            This Product
                                        </button>
                                    @else
                                        <button type="button"
                                                onclick="window.location.href='{{route('AdminProductStatus','unapproved='.base64_encode($product->id))}}'"
                                                class="btn btn-secondary btn-lg btn-block waves-effect waves-light">
                                            Unapproved
                                            This Product
                                        </button>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    </div> <!-- end col -->
    </div> <!-- end row -->

    </div> <!-- end container -->
    </div>


@endsection

@push('style')
    <!-- DataTables -->
    <link href="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@endpush

@push('script')
    <!-- Required datatable js -->
    <script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('assets/admin/pages/datatables.init.js')}}"></script>

    <script src="{{asset('assets/sweetalert/sweetalert.js')}}"></script>
    <script>
        @if(session()->has('message'))
        swal({
            title: "Message",
            text: "{{ session()->get('message') }}",
            type: "success",
        });
        @endif
    </script>

@endpush
