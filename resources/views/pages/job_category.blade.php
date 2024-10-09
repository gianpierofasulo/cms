@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_blog) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ __($category_single->category_name) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __($category_single->category_name) }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 filter-result">
                <div class="single-section">


                   @foreach($job_items as $row)
                   <div class="job-box d-md-flex align-items-center justify-content-between mb-30">

                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                            {{ Str::limit($row->job_title, 2, '') }}
                        </div>
                        <div class="job-content">
                            <h5 class="text-center text-md-left"><a href="{{ url('job/'.$row->job_slug) }}">{{ __($row->job_title) }}</a></h5>
                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                <p class="mr-md-4">
                                    <i class="zmdi zmdi-pin mr-2"></i> {{ __($row->job_location) }}
                                </p>
                                <p class="mr-md-4">
                                    <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                </p>
                                <p class="mr-md-4">
                                    <i class="zmdi zmdi-time mr-2"></i> {{ __($row->job_type) }}
                                </p>
                            </ul>
                        </div>
                    </div>
                    <div class="job-right my-4 flex-shrink-0">
                        <a href="{{ url('job/'.$row->job_slug) }}" class="btn d-block w-100 d-sm-inline-block btn-light">{{__('Read More')}}</a>

                    </div>
                </div>
                @endforeach
            </div>
            <div>
                {{ $job_items->links() }}
            </div>
        </div>
                <!-- <div class="col-md-4">
                    @include('layouts.sidebar_job')
                </div> -->
            </div>
            <!-- --------- -->
            <div class="container mt-5">
                <div class="d-flex justify-content-between">
                    <h4>Recommended Jobs</h4> 
                    <a href="{{ route('front.career') }}" class="btn btn-sm btn-outline-dark">{{__('See all Jobs')}}</a>
                </div>
                <div class="row mt-2 g-1">
                    @foreach($jobs as $row)
                    <div class="col-md-3">
                        <div class="card p-2">
                            @if($row->job_type =="Full Time")
                            <div class="text-right"> <small class="badge badge-primary">{{$row->job_type}}</small> </div>
                            @else
                            <div class="text-right"> <small class="badge badge-warning">{{$row->job_type}}</small> </div>
                            @endif
                            <div class="text-center mt-2 p-3 job-box">
                             @php
                             $words = explode(' ', $row->job_title);
                             $abbreviatedTitle = '';
                             foreach ($words as $word) {
                             $abbreviatedTitle .= substr($word, 0, 1);
                         }
                         @endphp

                         <div  class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-5 d-md-none d-lg-flex"> {{ $abbreviatedTitle }} </div>


                         <span class="d-block font-weight-bold">{{$row->job_title}}</span>
                         <hr> <span>{{$row->job_company_name}}</span>
                         <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i> <small class="ml-1">{{$row->job_location}}</small> </div>
                         <div class="d-flex justify-content-between mt-3"> <span>$ {{$row->job_salary}}</span> 
                            <a href="{{ url('job/apply/'.$row->job_slug) }}" class="btn btn-sm btn-outline-dark">{{__('Apply Now')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- ------- -->
</div>
</div>



@endsection
