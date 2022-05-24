@extends('layouts.site')
@section('title', 'forgot-password')

@section('style')

@stop

@section('content')

<div class="bg-white">
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex vh-100">
            <div class="col-md-4 mx-auto">
                <div class="osahan-login py-4">
                    <div class="text-center mb-4">
                        <a href="{{ route('main') }}">
                            <img src="{{asset('ashry/front/img/logo/logompns3.jpg')}}"
                                 alt="..." style="width: 35%">
                        </a>
                        <h5 class="font-weight-bold mt-3">First, let's find your account</h5>
                        <p class="text-muted">Please enter your email or phone</p>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <label class="mb-1">Email or Phone</label>
                            <div class="position-relative icon-form-control">
                                <i class="feather-user position-absolute"></i>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block text-uppercase" type="submit">
                            Find account
                        </button>
                        <div class="py-3 d-flex align-item-center">
                            <a href="{{ route('sign-in') }}">Sign In</a>
                            <span class="ml-auto"> New to Osahanin?
                                <a class="font-weight-bold"
                                   href="{{ route('sign-up') }}">
                                    Join now
                                </a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')

@stop
