@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_customer_panel) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __('Change Profile Information')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Change Profile Information')}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-md-3">				
                    <div class="user-sidebar">
                        @include('layouts.sidebar_customer')
                    </div>
                </div>

                <div class="col-md-9">
                    <form action="{{ url('customer/profile-change/update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('Name *')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_name') }}" name="customer_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('Email Address *')}}</label>
                                    <input type="email" class="form-control" value="{{ session()->get('customer_email') }}" name="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('Phone')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_phone') }}" name="customer_phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('Country')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_country') }}" name="customer_country">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('Address')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_address') }}" name="customer_address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('State')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_state') }}" name="customer_state">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('City')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_city') }}" name="customer_city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">{{ __('Zip Code')}}</label>
                                    <input type="text" class="form-control" value="{{ session()->get('customer_zip') }}" name="customer_zip">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Update Information')}}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
