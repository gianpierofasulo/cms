@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_registration) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __('Customer Registration')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Customer Registration')}}</li>
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
                            <form action="{{ route('customer.registration.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">{{ __('Name')}}</label>
                                    <input type="text" class="form-control" name="customer_name">
                                </div>
                                <div class="form-group">
                                    <label for="">{{ __('Email address')}}</label>
                                    <input type="text" class="form-control" name="customer_email">
                                </div>
                                <div class="form-group">
                                    <label for="">{{ __('Password')}}</label>
                                    <input type="password" class="form-control" name="customer_password">
                                </div>
                                <div class="form-group">
                                    <label for="">{{ __('Retype Password')}}</label>
                                    <input type="password" class="form-control" name="customer_re_password">
                                </div>
                                
                                @if($g_setting->google_recaptcha_status == 'Show')
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                                </div>
                                @endif

                                <button type="submit" class="btn btn-primary btn-arf">{{ __('Make Registration')}}</button>
                                <div class="new-user">
                                    <a href="{{ route('customer.login') }}">{{ __('Existing User? Go to Login Page')}}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
