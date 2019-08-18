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
                    <div class="card m-b-20">
                        <div class="card-body">
                            @if ($errors->any())

                                <ul class="alert alert-danger alert-dismissible">
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>

                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form method="post" action="{{route('NurseryProductAdd')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Product
                                        Name*</label>
                                    <div class="col-sm-10">
                                        <select class="form-control js-example-basic-single" name="name_id">
                                            <option value="" selected disabled>Select Name</option>
                                            @foreach($name as $names)
                                                <option
                                                    value="{{$names->id}}" {{ old('name_id') ? 'selected' : '' }}>
                                                    {{$names->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category*</label>
                                    <div class="col-sm-10">
                                        <select
                                            class="form-control js-example-basic-single"
                                            name="category_id" id="category">
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach($category as $categorys)
                                                <option
                                                    value="{{$categorys->id}}" {{ old('category_id') ? 'selected' : '' }}>
                                                    {{$categorys->category}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sub Category*</label>
                                    <div class="col-sm-10">
                                        <select class="form-control js-example-basic-single" id="subcategory" name="subcategory_id">
                                            <option value="" selected disabled>Select Subcategory</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Brand*</label>
                                    <div class="col-sm-10">
                                        <select class="form-control js-example-basic-single" id="brand" name="brand_id[]" multiple="multiple">
                                            <option value="" disabled>Select Brand</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Short Description*</label>
                                    <div class="col-sm-10">
                                        <textarea name="short_description"
                                                  class="form-control">{{ old('short_description')}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Long Description*</label>
                                    <div class="col-sm-10">
                                        <textarea name="long_description"
                                                  class="form-control">{{ old('long_description')}}</textarea>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">color*</label>
                                    <div class="col-sm-10">
                                        <div id="colorpicker-color-pattern" data-format="alias"
                                             class="input-group colorpicker-component">
                                            <input type="text" name="color" value="{{ old('color')}}"
                                                   class="form-control {{ $errors->has('color') ? ' is-invalid' : '' }}"
                                                   placeholder="Please select product color">
                                            <span class="input-group-append add-on">
                                                <button class="btn btn-white" type="button">
                                                    <i style="background-color: #337ab7;margin-top: 2px;"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="age_id">
                                            <option value="" selected disabled>Select Age</option>
                                            @foreach($age as $ages)
                                                <option
                                                    value="{{$ages->id}}" {{ old('age_id') ? 'selected' : '' }}>
                                                    {{$ages->age}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Item
                                        Weight</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="item_weight_id">
                                            <option value="" selected disabled>Select Weight</option>
                                            @foreach($item_weight as $item_weights)
                                                <option
                                                    value="{{$item_weights->id}}" {{ old('item_weight_id') ? 'selected' : '' }}>
                                                    {{$item_weights->weight}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Height</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="height_id">
                                            <option value="" selected disabled>Select Height</option>
                                            @foreach($height as $heights)
                                                <option
                                                    value="{{$heights->id}}" {{ old('height_id') ? 'selected' : '' }}>
                                                    {{$heights->height}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Width</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="width_id">
                                            <option value="" selected disabled>Select Width</option>
                                            @foreach($width as $widths)
                                                <option
                                                    value="{{$widths->id}}" {{ old('width_id') ? 'selected' : '' }}>
                                                    {{$widths->width}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">price</label>
                                    <div class="col-sm-10">
                                        <input id="demo2" type="text" value="{{ old('price')}}" name="price"
                                               class=" form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Discount</label>
                                    <div class="col-sm-10">
                                        <input id="demo2" type="text" value="{{ old('discount')}}" name="discount"
                                               class=" form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Profit
                                        Margin</label>
                                    <div class="col-sm-10">
                                        <input id="demo2" type="text" value="{{ old('profit_margin')}}"
                                               name="profit_margin"
                                               class=" form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Image (1)</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="filestyle" name="image"
                                               data-buttonname="btn-secondary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Image (2)</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="filestyle" name="image2"
                                               data-buttonname="btn-secondary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Image (3)</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="filestyle" name="image3"
                                               data-buttonname="btn-secondary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Image (4)</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="filestyle" name="image4"
                                               data-buttonname="btn-secondary">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-month-input" class="col-sm-2 col-form-label">Tree video youtube
                                        link</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" value="{{ old('video')}}" name="video"
                                               id="inputFahrenheit" type="text"
                                               placeholder="Youtube video link">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Qty</label>
                                    <div class="col-sm-10">
                                        <input id="demo3" type="number" value="{{ old('qty')}}" name="qty"
                                               class=" form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">With
                                        fruit</label>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline3" name="with_fruit" value="yes" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline3">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline4" name="with_fruit" value="no" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadioInline4">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">With
                                        flower</label>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="with_flower" value="yes" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="with_flower" value="no" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadioInline2">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Origin
                                        Country</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="origin_country_id">
                                            <option value="" selected disabled>Origin Country</option>
                                            @foreach($origin_country as $origin_countries)
                                                <option
                                                    value="{{$origin_countries->id}}" {{ old('origin_country_id') ? 'selected' : '' }}>
                                                    {{$origin_countries->country}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-month-input" class="col-sm-2 col-form-label">temperature</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="temperature_id">
                                            <option value="" selected disabled>Select Temperature</option>
                                            @foreach($temperature as $temperatures)
                                                <option
                                                    value="{{$temperatures->id}}" {{ old('temperature_id') ? 'selected' : '' }}>
                                                    {{$temperatures->temperature}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">What you will get?</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="what_you_will_get"
                                               value="{{ old('what_you_will_get')}}" id="example-number-input">
                                    </div>
                                </div>

                                {{--                                <div class="form-group row">--}}
                                {{--                                    <label for="example-number-input" class="col-sm-2 col-form-label">VIDEO</label>--}}
                                {{--                                    <div class="col-sm-10">--}}
                                {{--                                        <div class="embed-responsive embed-responsive-16by9">--}}
                                {{--                                            <iframe class="embed-responsive-item"--}}
                                {{--                                                    src="https://www.youtube.com/embed/1y_kfWUCFDQ"></iframe>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Gift</label>
                                    <div class="col-sm-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline5" name="gift" value="yes" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline5">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline6" name="gift" value="no" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadioInline6">No</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Add Product
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
    <!-- end wrapper -->

@endsection
@push('style')
    <!-- plug -in -->
    <link href="{{asset("assets/nursery/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}"
          rel="stylesheet">
    <link href="{{asset("assets/nursery/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css")}}"
          rel="stylesheet">
    <link href="{{asset("assets/nursery/plugins/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/nursery/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css")}}"
          rel="stylesheet"/>
@endpush

@push('script')
    <!-- Plugins js -->
    <script src="{{asset("assets/nursery/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>
    <script src="{{asset("assets/nursery/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{asset("assets/nursery/plugins/select2/js/select2.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/nursery/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js")}}"
            type="text/javascript"></script>
    <script src="{{asset("assets/nursery/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js")}}"
            type="text/javascript"></script>
    <script src="{{asset("assets/nursery/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js")}}"
            type="text/javascript"></script>
    <!-- Plugins Init js -->
    <script src="{{asset("assets/nursery/pages/form-advanced.js")}}"></script>

    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#category').change(function () {
            let id = $(this).val();
            $.ajax({
                url: "{{ route('SelectSubcategory') }}",
                type: 'post',
                data: {_token: CSRF_TOKEN, id: id},
                dataType: 'json',
                success: function (data) {
                    $('#subcategory').html('').append($('<option>', {value: '', text: 'Select Subcategory'}));
                    data.forEach(function (element) {
                        $('#subcategory').append($('<option>', {value: element.id, text: element.subcategory}));
                    });
                }
            });
        });

        $('#subcategory').change(function () {
            let id = $(this).val();
            $.ajax({
                url: "{{ route('SelectBrand') }}",
                type: 'post',
                data: {_token: CSRF_TOKEN, id: id},
                dataType: 'json',
                success: function (data) {
                    $('#brand').html('').append($('<option>', {value: '', text: 'Select Brand'}));
                    data.forEach(function (element) {
                        $('#brand').append($('<option>', {value: element.id, text: element.name}));
                    });
                }
            });
        });

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

    </script>

@endpush

