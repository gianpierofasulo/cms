@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_branch) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ __($branch_detail->name) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __($branch_detail->name) }}</li>
            </ol>
        </nav>
    </div>
</div>
<div class="page-content">
    <div class="container">
        
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4>{{__('Location')}}</h4>
                        <p>
                            {!! nl2br(e($branch_detail->location)) !!}
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
                            {!! nl2br(e(__($branch_detail->telephone)) )!!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fas fa-tag" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4>{{__('Status')}}</h4>
                        <p>
                            {!! nl2br(e(__($branch_detail->status)) )!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="special" style="background-image: url({{ asset('public/uploads/'.$branch_detail->photo) }});">  
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <h3>{{__('Call Now')}} <a href="tel:">{{ __($branch_detail->telephone) }}</a> </h3>
                <p>
                    {!! nl2br(e(__($branch_detail->location)) )!!}
                </p>
                <p>
                    {!! nl2br(e(__($branch_detail->manager)) )!!}
                </p>
                
            </div>
            
        </div>
    </div>
</div>
<iframe class="special" style="border-style: none;" width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $branch_detail->latitude;?>,<?php echo $branch_detail->longtiude; ?>&output=embed"></iframe>
@endsection
