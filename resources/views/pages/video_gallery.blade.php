@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_video_gallery) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ $video_gallery->name }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $video_gallery->name }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="page-content mt_30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $video_gallery->detail !!}
            </div>
        </div>
        <div class="row">
           @foreach ($videos as $row)
           
           <div class="col-sm-3 nopadding">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="//www.youtube.com/embed/{{ $row->video_youtube }}" allowfullscreen></iframe>
          </div>
          <div class="video-caption">
            {{ $row->video_caption }}
        </div>
    </div>
    @endforeach
</div>
</div>
</div>


<!-- ----------- -->





@endsection
