@extends('admin.layout.app')
@section('title','Add Nursery Admin')
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
                        <h4 class="page-title"><i class="dripicons-box"></i> NURSERY USER ADD</h4>
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
                            @if(session()->has('message'))
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form class="form-horizontal m-t-30" action="{{ route('register.nursery') }}"
                                  aria-label="{{ __('Register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <input type="email" name="email" value="{{ old('email')}}"
                                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           id="useremail"
                                           placeholder="Enter email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="name" value="{{ old('name')}}"
                                           class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           id="username"
                                           placeholder="Enter username">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" name="password"
                                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           id="userpassword" placeholder="Enter password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group row m-t-20">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                            Register
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

