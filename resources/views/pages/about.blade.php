@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_about) }})">
  <div class="bg-page"></div>
  <div class="text">
    <h1>{{ __($about->name) }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __($about->name) }}</li>
      </ol>
    </nav>
  </div>
</div>
   <!--  <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! __($about->detail) !!}
                </div>
            </div>
        </div>
      </div> -->

     <style type="text/css">
    .how-section1{
    margin-top:-15%;
    padding: 10%;
}
.how-section1 h4{
    color: #ffa500;
    font-weight: bold;
    font-size: 30px;
}
.how-section1 .subheading{
    color: #3931af;
    font-size: 20px;
}
.how-section1 .row
{
    margin-top: 10%;
}
.how-img 
{
    text-align: center;
}
.how-img img{
    width: 40%;
}

.how-img1 
{
    text-align: center;
}
.how-img1 img{
    width: 100%;
}
</style>

<div class="how-section1">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <h4>About us</h4>        
                        <p class="text-muted"> 
                          @if($about->detail == '')
                            No Message Found.
                            @else
                            {!! $about->detail !!}
                          @endif
                        </p>
                        </div>
                         <div class="col-md-6 how-img1">
                            <img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" class="img-fluid  wow fadeInRight" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6 how-img">
                            <img src="{{ asset('public/uploads/'.$about->mession_photo) }}" class="rounded-circle img-fluid" alt=""/>
                        </div>
                        <div class="col-md-6">
                            <h4>Mession</h4>
                                       <p class="text-muted">@csrf
                                        @if($about->mession == '')
                                        No Message Found.
                                        @else
                                        {!! $about->mession !!}
                                      @endif
                                    </p>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <h4>Vision</h4>
                                        <p class="text-muted">
                                          @csrf
                                          @if($about->vision == '')
                                          No Message Found.
                                          @else
                                          {!! $about->vision !!}
                                        @endif</p>
                        </div>
                        <div class="col-md-6 how-img">
                             <img src="{{ asset('public/uploads/'.$about->vision_photo) }}" class="rounded-circle img-fluid" alt=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4><i class="fa fa-leaf fa-2x mb-3 text-warning"></i>Core Value</h4>
                                       
                                        <p class="text-muted"> @csrf
                                          @if($about->core_value == '')
                                          No Message Found.
                                          @else
                                          {!! $about->core_value !!}
                                        @endif</p>
                        </div>
                        <div class="col-md-6 how-img">
                            <h4>Objective <i class="fa fa-leaf fa-2x mb-3 text-warning"></i></h4>
                            <p class="text-muted"> @csrf @if($about->objective == '')
                            No Message Found.
                            @else
                            {!! $about->objective !!}
                          @endif
                        </p>
                        </div>
                    </div>
                </div>

@endsection

