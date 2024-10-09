@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_branch) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __($branch->name) }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __($branch->name) }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $branch->detail !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item flex">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h4>{{__('Location')}}</h4>
                            <p>
                                {!! nl2br(e($branch->location)) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item flex">
                        <div class="contact-icon">
                            <i class="fas fa-phone-volume" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h4>{{__('Tel Number')}}</h4>
                            <p>
                                {!! nl2br(e($branch->telephone)) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item flex">
                        <div class="contact-icon">
                            <i class="fas fa-envelope-open" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h4>{{__('Email Address')}}</h4>
                            <p>
                                {!! nl2br(e($branch->level)) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

          

            <div class="row contact-form">
                <div class="col-md-12">
                    <iframe style="border-style: none;" width="100%" height="400" src="https://maps.google.com/maps?q=<?php echo $branch->latitude;?>,<?php echo $branch->longtiude; ?>&output=embed"></iframe>

                </div>
            </div>
        </div>
    </div>
@endsection
