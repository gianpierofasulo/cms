@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_ceo) }})">
    <div class="bg-page"></div>
   <!--  <div class="text">
        <h1>{{ $seniors->name }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('front.senior') }}">CEO</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $seniors->name }}</li>
            </ol>
        </nav>
    </div> -->
        <div class="text">
            <h1>{{ $seniors->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CEO/ {{ $seniors->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
           @foreach($ceo as $row)
           <div class="row team-single">
            <div class="col-md-4">
                <div class="team-member-photo">
                    <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                </div>
                 <div class="team-text">
                    <h4><a href="{{ url('senior/'.$row->slug) }}">{{ $row->name }}</a></h4>
                    <p>{{ $row->designation }}</p>
                </div>
            </div>

         <!--   <div class="row product-detail pt_30 pb_40">

              <div class="col-md-5">
                <div class="team-photo">
                   <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="CEO IMAGE">
                </div>
                <div class="team-text">
                    <h4><a href="{{ url('senior/'.$row->slug) }}">{{ $row->name }}</a></h4>
                    <p>{{ $row->designation }}</p>
                </div>
            </div> -->
                  
            <div class="col-md-7">
              <div class="card">  <div class="col-md-12">
                @csrf
                <h2 class="mt_30">Message from the CEO</h2>
                @if($row->ceo_message == '')
                No Message Found.
                @else
                {!! $row->ceo_message !!}
                @endif
            </div></div>
        </div>
    </div>
    @endforeach
   <!--  <div class="row product-detail pt_30 pb_40">
        <div class="col-md-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Detail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Other</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    {!! $seniors->name !!}
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    {!! $seniors->name !!}
                </div>
            </div>
        </div>
    </div> -->
</div>
</div>
@endsection
