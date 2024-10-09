@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_search) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Search By: {{ $search_string }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $search_string }}</li>
                </ol>
            </nav>
        </div>
    </div>
 
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-section">

                        @if(count($job_items) == 0)
                            <div class="text-danger">No Result is Found</div>
                        @else
                        @foreach($job_items as $row)
                            <div class="blog-item">
                                <div class="featured-photo">
                                    <a href="{{ url('job/'.$row->job_slug) }}"></a>
                                </div>
                                <div class="text career-main-item">
                                    <h3><a href="{{ url('job/'.$row->job_slug) }}">{{ $row->job_title }}</a></h3>

                                    <h4>{{__('Company:')}} {{ __($row->job_company_name) }} | {{__('Deadline:')}} {{ __($row->job_deadline) }} <p class="badge badge-info"><i class="fa fa-map-marker"></i> {{ __($row->job_location) }}</p></h4>

                                    <p>
                                        {!! nl2br(e($row->job_description_short)) !!}
                                    </p>


                                    <!-- <div class="read-more">
                                        <a href="{{ url('job/'.$row->job_slug) }}">Read More</a>
                                    </div> -->

                                <div class="row long">
                               
                                <div class="col-md-4">
                                    <a href="{{ url('job/'.$row->job_slug) }}" class="btn btn-success btn-sm btn-block">{{__('See Details')}}</a>
                                </div>
                                
                            </div>
                                </div>
                            </div>
                        @endforeach
                        @endif

                    </div>
                    {{-- <div>
                        {{ $blog_items->links() }}
                    </div> --}}
                </div>
                <div class="col-md-4">
                    @include('layouts.sidebar_job')
                </div>
            </div>
        </div>
    </div>

@endsection
