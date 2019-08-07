@extends('admin.layout.app')
@section('title','Brand list')
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
                        <h4 class="page-title"><i class="dripicons-blog"></i> All Brand</h4>
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
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Brand Name</th>
                                    <th>Total Product</th>
                                    <th>Frontend View</th>
                                    <th> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $list = 1; @endphp
                                @foreach($tag as $tags)
                                    <tr>
                                        <td>{{$list}}</td>
                                        <td>{{$tags->name}}</td>
                                        <td>{{$tags->product->count()}}</td>
                                        <td>
                                            @if($tags->status == 0)
                                                <button
                                                    onclick="window.location.href='{{route('AdminBrandStatus','approve='.base64_encode($tags->id))}}'"
                                                    type="button"
                                                    class="btn btn-outline-dark waves-effect waves-light">
                                                    Active
                                                </button>
                                            @else
                                                <button
                                                    onclick="window.location.href='{{route('AdminBrandStatus','unapproved='.base64_encode($tags->id))}}'"
                                                    type="button"
                                                    class="btn btn-dark waves-effect waves-light">
                                                    Inactive
                                                </button>
                                            @endif
                                        </td>
                                        <td>
                                            <button
                                                href="{{route('AdminTagDelete','delete='.base64_encode($tags->id))}}"
                                                type="button"
                                                class="delete btn btn-outline-dark waves-effect waves-light">
                                                Delete
                                            </button>

                                        </td>
                                    </tr>
                                    @php $list++; @endphp
                                @endforeach
                                </tbody>
                            </table>

                        </div>
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
    <script>
        $('.delete').click(function (e) {
            e.preventDefault(); // Prevent the href from redirecting directly
            let linkURL = $(this).attr("href");
            swal({
                title: "Sure want to delete?",
                text: "If you click 'OK' file will be deleted",
                type: "warning",
                showCancelButton: true
            }, function () { // Redirect the user | linkURL is href url
                window.location.href = linkURL;
            });
        });
    </script>
@endpush
