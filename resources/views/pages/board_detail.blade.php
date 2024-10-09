@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_board_detail) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ __($board_detail->name) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('front.senior') }}">{{__('Board Of Directors')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __($board_detail->name) }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row team-single">
            <div class="col-md-4">
                <div class="team-member-photo">
                    <img src="{{ asset('public/uploads/'.$board_detail->photo) }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>{{__('Name')}}</td>
                            <td>{{ __($board_detail->name) }}</td>
                        </tr>
                        <tr>
                            <td>{{__('Designation')}}</td>
                            <td>{{ __($board_detail->designation) }}</td>
                        </tr>
                        <tr>
                            <td>{{__('Address')}}</td>
                            <td>
                                {!! nl2br(e($board_detail->address)) !!}
                            </td>
                        </tr>
                        <tr>
                            <td>{{__('Email')}}</td>
                            <td>{{ __($board_detail->email) }}</td>
                        </tr>
                        <tr>
                            <td>{{__('Phone Number')}}</td>
                            <td>{{ __($board_detail->phone) }}</td>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>
        </div>
        <div class="row team-single">
            <div class="col-md-12">

                <div class="description mt_30">
                    <ul class="nav nav-pills mb-3 nav-doctor" id="pills-tab" role="tablist">
                        
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tab-2" data-toggle="pill" href="#pills-t-2" role="tab" aria-controls="pills-t-2" aria-selected="false">{{__('More Details')}}</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content nav-doctor-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade" id="pills-t-2" role="tabpanel" aria-labelledby="pills-tab-2">
                            @if($board_detail->detail == '')
                                No Content Found.
                            @else
                                {!! $board_detail->detail !!}
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
