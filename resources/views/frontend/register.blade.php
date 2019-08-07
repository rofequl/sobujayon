@extends('frontend.layout.app')
@section('content')

<section class="section white">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="general-title text-center">
                    <h4>Registration</h4>
                    <p class="lead">Let's contact now with our custom</p>
                    <hr>
                </div>
                <div class="appoform-wrapper noborder">
                    <div class="contact_form" style="margin: 20px 200px 20px 200px">
                        <div id="message">
                            @if ($errors->any())
                                    <ul class="alert alert-danger alert-dismissible">
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>
                        <form id="contactform" class="row" method="post" action='{{route('register.user')}}' aria-label="{{ __('Register') }}">
                            @csrf
                            <fieldset class="row-fluid appoform">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" id="name" class="form-control" value="{{ old('username')}}" placeholder="Userame">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}"  placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" name="phone" id="phone" value="{{ old('phone')}}" class="form-control" placeholder="Phone">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="password">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password_confirmation" id="password" class="form-control" placeholder="confirm password">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button style="margin-top: 20px" type="submit" value="SEND" id="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end form-container -->
            </div><!-- end col -->


        </div><!-- end container -->
</section>

@endsection
