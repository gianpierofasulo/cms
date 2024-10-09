@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_senior_detail) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ $senior_detail->name }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('front.senior') }}">Senior Management</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $senior_detail->name }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row team-single">
            <div class="col-md-4">
                <div class="team-member-photo">
                    <img src="{{ asset('public/uploads/'.$senior_detail->photo) }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>{{ $senior_detail->name }}</td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td>{{ $senior_detail->designation }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                {!! nl2br(e($senior_detail->address)) !!}
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $senior_detail->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $senior_detail->phone }}</td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td>{{ $senior_detail->website }}</td>
                        </tr>
                        @if($senior_detail->facebook != '' ||$senior_detail->twitter != '' ||$senior_detail->linkedin != '' ||$senior_detail->youtube != '' ||$senior_detail->instagram != '')
                        <tr>
                            <td>Social Media</td>
                            <td>
                                <ul class="doc_detail_social">

                                    @if($senior_detail->facebook!='')
                                    <li><a href="{{ $senior_detail->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif

                                    @if($senior_detail->twitter!='')
                                        <li><a href="{{ $senior_detail->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    @endif

                                    @if($senior_detail->linkedin!='')
                                        <li><a href="{{ $senior_detail->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif

                                    @if($senior_detail->youtube!='')
                                        <li><a href="{{ $senior_detail->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    @endif

                                    @if($senior_detail->instagram!='')
                                        <li><a href="{{ $senior_detail->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row team-single">
            <div class="col-md-12">

                <div class="description mt_30">
                    <ul class="nav nav-pills mb-3 nav-doctor" id="pills-tab" role="tablist">
                        
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tab-2" data-toggle="pill" href="#pills-t-2" role="tab" aria-controls="pills-t-2" aria-selected="false">More Details</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content nav-doctor-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade" id="pills-t-2" role="tabpanel" aria-labelledby="pills-tab-2">
                            @if($senior_detail->detail == '')
                                No Content Found.
                            @else
                                {!! $senior_detail->detail !!}
                            @endif
                        </div>
                       
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
