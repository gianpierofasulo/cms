@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_forget_password) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __('Reset Password')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Reset Customer Password')}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="reg-login-form">
                        <div class="inner">
                            <form action="{{ route('customer.forget_password.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">{{ __('Email address')}}</label>
                                    <input type="text" class="form-control" name="customer_email">
                                </div>

                                @if($g_setting->google_recaptcha_status == 'Show')
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                                </div>
                                @endif

                                <button type="submit" class="btn btn-primary btn-arf">{{ __('Send Password Reset Link')}}</button>
                                <a href="{{ route('customer.login') }}" class="btn btn-warning">{{ __('Back to Login Page')}}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
