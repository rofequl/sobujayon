@extends('admin.layout.app')
@section('title','Add Subcategory')
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
                        <h4 class="page-title"><i class="dripicons-box"></i>Sub CATEGORY ADD</h4>
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
                            <form method="post" action="{{route('AdminSubcategoryAdd')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Category name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id">
                                            <option value="" selected disabled> select Category</option>
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">sub Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="subcategory" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            add SubCategory
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- end container -->
    </div>



@endsection

