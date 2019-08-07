@extends('frontend.layout.app')
@section('content')


    <section class="section white">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="general-title text-center">
                        <h4>LogIn</h4>
                        <p class="lead">Let's contact now with our custom</p>
                        <hr>
                    </div><!-- end general title -->

                    <div class="appoform-wrapper noborder">
                        <div class="contact_form" style="margin: 20px 200px 20px 200px">
                            <div id="message">
                                @if(!empty($errors->first('message')))
                                    <div class="alert alert-danger">
                                        <span>{{ $errors->first('message') }}</span>
                                    </div>
                                @endif
                            </div>
                            <form id="contactform" class="row" method="POST" action='{{route('login.user')}}'
                                  aria-label="{{ __('Login') }}">
                                @csrf
                                <fieldset class="row-fluid appoform">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="phone"
                                               class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                               placeholder="Phone">
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" name="password" id="password"
                                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               placeholder="password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button style="margin-top: 20px" type="submit" value="SEND" id="submit"
                                                class="btn btn-primary btn-block btn-lg">Login
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection

