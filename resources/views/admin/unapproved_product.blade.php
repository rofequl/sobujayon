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
                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>order ID</th>
                                    <th>product name</th>
                                    <th>Price</th>
                                    <th>discount</th>
                                    <th>Photo</th>
                                    <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1 @endphp
                                @foreach($product as $products)
                                    <tr>
                                        <td>{{$no}}</td>@php $no++ @endphp
                                        <td>{{$products->id}}</td>
                                        <td>{{$products->name->name}}</td>
                                        <td>{{$products->price}}</td>
                                        <td>{{$products->discount}}</td>
                                        <td><img class="rounded-circle" height="100" width="100" alt="200x200" src="{{asset('storage/tree/'.$products->image)}}" data-holder-rendered="true"></td>
                                        <td>
                                            <button onclick="window.location.href='{{route('AdminUnapprovedProductSingle',base64_encode($products->id))}}'" type="button"
                                                    class="btn btn-outline-primary waves-effect waves-light">Product Info
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>


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
@endpush
