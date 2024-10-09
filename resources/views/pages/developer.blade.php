@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_developer_detail) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ $developers->name }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('front.developer') }}">Developer Contact</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $developers->name }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row team-single">
            <div class="col-md-4">
                <div class="team-member-photo card">
                    <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$developers->photo) }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Name</td>
                            <td>{{ $developers->name }}</td>
                        </tr>
                       
                        <tr>
                            <td>Address</td>
                            <td>
                                {!! nl2br(e($developers->address)) !!}
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $developers->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $developers->phone }}</td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><a target="_blank" href="{{ $developers->website }}">{{ $developers->website }}</a></td>


                        </tr>
                        @if($developers->facebook != '' ||$developers->twitter != '' ||$developers->linkedin != '' ||$developers->youtube != '' ||$developers->instagram != '')
                        <tr>
                            <td>Social Media</td>
                            <td>
                                <ul class="doc_detail_social">

                                    @if($developers->facebook!='')
                                    <li><a href="{{ $developers->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif

                                    @if($developers->twitter!='')
                                        <li><a href="{{ $developers->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    @endif

                                    @if($developers->linkedin!='')
                                        <li><a href="{{ $developers->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    @endif

                                   <!--  @if($developers->youtube!='')
                                        <li><a href="{{ $developers->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    @endif -->

                                    @if($developers->instagram!='')
                                        <li><a href="{{ $developers->instagram }}" target="_blank"><i class="fab fa-telegram"></i></a></li>
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
                            @if($developers->detail == '')
                                No Content Found.
                            @else
                                {!! $developers->detail !!}
                            @endif
                        </div>
                       
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
