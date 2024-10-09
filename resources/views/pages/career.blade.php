@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_career) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ __($career->name) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __($career->name) }}</li>
            </ol>
        </nav>
    </div>
</div>


<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $career->detail !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                @include('layouts.sidebar_job')
            </div>
            <div class="col-md-8">
                <div class="career">

                    @foreach ($jobs as $row)
                    <div class="career-main-item">
                        <div class="job-box d-md-flex ">
                          <div style="font-size: 18px;" class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex ">

                            @php
                            $words = explode(' ', $row->job_title);
                            $abbreviatedTitle = '';
                            foreach ($words as $word) {
                            $abbreviatedTitle .= substr($word, 0, 1);
                        }
                        @endphp

                        {{ $abbreviatedTitle }}
                        <!-- {{ Str::limit($row->job_title, 2, '') }} -->
                    </div>


                    <h3>{{ __($row->job_title) }}</h3>
                </div>
                <h4>{{__('Company:')}} {{ __($row->job_company_name) }} | {{__('Deadline:')}} {{ __($row->job_deadline) }}</h4>
                <p>
                    {!! nl2br(e($row->job_description_short)) !!}
                </p>
                <div class="row long">
                    <div class="col-md-4">
                        <div class="btn btn-light btn-sm btn-block"><i class="fa fa-map-marker"></i> {{ __($row->job_location) }}</div>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('job/'.$row->job_slug) }}" class="btn btn-secondary btn-sm btn-block">{{__('See Details')}}</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('job/apply/'.$row->job_slug) }}" class="btn btn-success btn-sm btn-block">{{__('Apply Now')}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    
</div>
</div>
</div>
@endsection
