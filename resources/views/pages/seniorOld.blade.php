@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_senior) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $seniors->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $seniors->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $seniors->detail !!}
                </div>
            </div>
            <div class="row team pt_0 pb_40">
                @foreach($senior as $row)
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="team-item">
                            <div class="team-photo">
                                <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                                    <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                                </a>
                            </div>
                            
                            <div class="team-text">
                                <h4><a href="{{ url('senior/'.$row->slug) }}">{{ $row->name }}</a></h4>
                                <p>{{ $row->designation }}</p>
                                @if($row->facebook != '' || $row->twitter != '' || $row->linkedin != '' || $row->youtube != '' || $row->instagram != '')
                                <div class="team-social">
                                    <ul>
                                        @if($row->facebook != '')
                                            <li><a href="{{ $row->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif

                                        @if($row->twitter != '')
                                            <li><a href="{{ $row->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        @endif

                                        @if($row->linkedin != '')
                                            <li><a href="{{ $row->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                        @if($row->youtube != '')
                                            <li><a href="{{ $row->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                        @endif
                                        @if($row->instagram != '')
                                            <li><a href="{{ $row->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        @endif

                                    </ul>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $senior->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
