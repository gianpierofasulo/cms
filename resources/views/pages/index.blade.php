@extends('layouts.app')

@section('content')
<div class="slider">
    <div class="slide-carousel owl-carousel">

        @foreach($sliders as $row)
        <div class="slider-item" style="background-image:url({{ asset('public/uploads/'.$row->slider_photo) }});">
            <div class="slider-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="slider-table">
                            <div class="slider-text">
                                <div class="text-animated">
                                    <h1>{{ __($row->slider_heading) }}</h1>
                                </div>
                                <div class="text-animated">
                                    <p>
                                        {!! nl2br(e($row->slider_text)) !!}
                                    </p>
                                </div>
                                <div class="text-animated">
                                    <ul>
                                        <li><a href="{{ $row->slider_button_url }}">{{ __($row->slider_button_text) }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======Counter start ======= -->
           <!--  <div class="container"> 
              <div class="nigus">      
                <div class="row">
                    @foreach($counter as $rows)
                    <div class="four col-md-3">
                      <div class="counter-box colored">
                        <i class="{{ __($rows->counter_favicon) }}"></i>
                        <span class="counter">{{ __($rows->counter_number) }}</span>
                        <p>{{ __($rows->counter_title) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div></br></br></br> -->
    <!-- ======Counter end ======= -->       
</div>
@endforeach
</div>
</div>

 @if($page_home->why_choose_status == 'Show')
<section class="py-5 text-center">
      <div class="container"> 
        <h2 class="text-center text-bold">{{ __($page_home->why_choose_title )}}</h2>
        <p class="text-muted mb-5 text-center">{{ __($page_home->why_choose_subtitle) }}</p>
        <div class="row">
        @foreach($why_choose_items as $row)
          <div class="col-sm-6 col-lg-4 mb-3 card">
             <div class="icon">
                <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
            </div>
            <h6>{{ __($row->name) }}</h6>
            <p class="text-muted">{!! nl2br(e($row->description)) !!}</p>
          </div>
        @endforeach
        </div>
      </div>
</section>
@endif

 @if($page_home->counter_status == 'Show')
<div class="jumbotron special" style="background-image:url({{ asset('public/uploads/'.$page_home->counter_bg) }});">
<div class="row w-100">
     @foreach($counter as $rows)
        <div class="col-md-3" >
            <div class="card border-primary mx-sm-1 p-3">
                <div class="card border-primary shadow text-primary p-3 my-card" ><span class="{{ __($rows->counter_favicon) }}" aria-hidden="true"></span></div>
                <div class="text-primary text-center mt-3"><h4>{{ __($rows->counter_title) }}</h4></div>
                <div class="text-warning text-center mt-2"><h1> <span class="counter">{{ __($rows->counter_number) }}</span></h1></div>
            </div>
        </div>
        @endforeach
     </div>
</div>
@endif
<style type="text/css">
    .my-card
        {
            position:absolute;
            left:40%;
            top:-20px;
            border-radius:50%;
        }
</style>

  @if($page_home->document_status == 'Show')
  <div class="service bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                 <h2>{{ __($page_home->document_title) }}</h2>
                 <h3>{{ __($page_home->document_subtitle) }}</h3>
             </div>
         </div>
     </div>
     <div class="row">
        <div class="col-md-12">
            @foreach($documents as $row)
            <div class="service-carousel owl-carousel">

                <div class="service-item wow fadeInUp">
                    @if($row->status == 'Public')
                    <div class="text">
                        <h4><i style='color: red;font-size: 21px;' class="{{ ($row->document_url) }}"></i> {{ __($row->document_name) }}</h4>
                        <div class="read-more">
                            <object class="magnific" data="{{ asset('public/uploads/'.$row->document_photo) }}" type="application/pdf" width="100%" height="100%">
                            </object>
                            <!-- <a href="{{ asset('public/uploads/'.$row->document_photo) }}" class="btn btn-primary btn-sm" download><i class="fa fa-download"> </i>Dawnload</a> -->
                            <a class="btn btn-success btn-sm" target="_blank" href="{{ asset('public/uploads/'.$row->document_photo) }}"><i class="fa fa-search-plus"> </i>{{__('View Full Screen')}}</a>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endif



<!-- @if($page_home->why_choose_status == 'Show')
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->why_choose_title )}}</h2>
                    <h3>{{ __($page_home->why_choose_subtitle) }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($why_choose_items as $row)
            <div class="col-md-4">
                <div class="feature-item wow fadeInUp">
                    <div class="icon">
                        <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                    </div>
                    <h4>{{ __($row->name) }}</h4>
                    <p>
                        {!! nl2br(e($row->description)) !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif -->


@if($page_home->about_us_status == 'Show')
<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        @foreach($about_us_items as $rows)
        <img class="img-fluid rounded" loading="lazy" src="{{ asset('public/uploads/'.$rows->about_us_photo) }}" alt="About 1">
        @endforeach
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
             @foreach($about_us_items as $row)
            <h2 class="mb-3">Who Are We?</h2>
        
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <i class="fa fa-leaf fa-2x mb-3 text-success"></i>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Mession</h2>
                    <p class="text-secondary mb-0">
                        @csrf
                    @if($row->mession == '')
                    No Message Found.
                    @else
                    {!! $row->mession !!}
                    @endif
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <i class="fa fa-leaf fa-2x mb-3 text-success"></i>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Vision</h2>
                    <p class="text-secondary mb-0">
                        @csrf
                    @if($row->vision == '')
                    No Message Found.
                    @else
                    {!! $row->vision !!}
                    @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

@if($page_home->about_us_status == 'Show')
<!-- --------Mession ------- -->
<!-- <div class="feature bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->about_us_title) }}</h2>
                    <h3>{{ __($page_home->about_us_subtitle) }}</h3>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            @foreach($about_us_items as $row)
            <div class="col-lg-5 wow fadeInLeft">
                <div class="photo">
                    <img src="{{ asset('public/uploads/'.$row->mession_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0">
                </div>
            </div>
            <div class="col-md-6 wow fadeInLeft bg-light">
                <h2 class="pity" style="margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;"><i class="fa fa-leaf fa-2x mb-3 text-success"></i> Mession</h2>
                <p class="font-italic text-muted mb-4"> @csrf
                    @if($row->mession == '')
                    No Message Found.
                    @else
                    {!! $row->mession !!}
                    @endif
                </p>
                <div class="read-more">
                    <a href="{{ url('about/') }}">{{__('Read More')}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> -->

@endif


@if($page_home->special_status == 'Show')
<div class="special" style="background-image: url({{ asset('public/uploads/'.$page_home->special_bg) }});">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <h2>{{ __($page_home->special_title) }}</h2>
                <h3>{{ __($page_home->special_subtitle )}}</h3>
                <p>
                    {!! nl2br(e($page_home->special_content)) !!}
                </p>
                <div class="read-more">
                    <a href="{{ $page_home->special_btn_url }}" class="btn btn-primary btn-arf">{{ __($page_home->special_btn_text) }}</a>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="video-section" style="background-image: url({{ asset('public/uploads/'.$page_home->special_video_bg) }})">
                    <div class="bg video-section-bg"></div>
                    <div class="video-button-container">
                        <a class="video-button" href="https://www.youtube.com/watch?v={{ $page_home->special_yt_video }}"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if($page_home->service_status == 'Show')
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->service_title) }}</h2>
                    <h3>{{ __($page_home->service_subtitle) }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service-carousel owl-carousel">
                    @foreach($services as $row)
                    <div class="service-item wow fadeInUp">
                        <div class="photo">
                            <a href="{{ url('service/'.$row->slug) }}"><img src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ url('service/'.$row->slug) }}">{{ __($row->name )}}</a></h3>
                            <p>
                                {!! nl2br(e($row->short_description)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('service/'.$row->slug) }}">{{__('Read More')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if($page_home->testimonial_status == 'Show')
<div class="testimonial" style="background-image: url({{ asset('public/uploads/'.$page_home->testimonial_bg) }});">
    <div class="testimonial-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->testimonial_title) }}</h2>
                    <h3>{{ __($page_home->testimonial_subtitle) }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel owl-carousel">
                    @foreach($testimonials as $row)
                    <div class="testimonial-item wow fadeInUp">
                        <div class="photo">
                            <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                        </div>
                        <div class="text">
                            <p>
                                {!! nl2br(e($row->comment)) !!}
                            </p>
                            <h3>{{ __($row->name) }}</h3>
                            <h4>{{ __($row->designation) }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if($page_home->project_status == 'Show')
<div class="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->project_title) }}</h2>
                    <h3>{{ __($page_home->project_subtitle) }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="project-carousel owl-carousel">
                    @foreach($projects as $row)
                    <div class="project-item wow fadeInUp">
                        <div class="photo">
                            <a href="{{ url('project/'.$row->project_slug) }}"><img src="{{ asset('public/uploads/'.$row->project_featured_photo) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ url('project/'.$row->project_slug) }}">{{ __($row->project_name) }}</a></h3>
                            <p>
                                {!! nl2br(e($row->project_content_short)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('project/'.$row->project_slug) }}">{{__('Read More')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if($page_home->team_member_status == 'Show')
<div class="team bg-lightblue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->team_member_title) }}</h2>
                    <h3>{{ __($page_home->team_member_subtitle) }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-carousel owl-carousel">

                    @foreach($team_members as $row)
                    <div class="team-item wow fadeInUp">
                        <div class="team-photo">
                            <a href="{{ url('team-member/'.$row->slug) }}" class="team-photo-anchor">
                                <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="Team Member Photo">
                            </a>
                        </div>
                        <div class="team-text">
                            <h4><a href="{{ url('team-member/'.$row->slug) }}">{{ __($row->name) }}</a></h4>
                            <p>{{ __($row->designation) }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endif



@if($page_home->appointment_status == 'Show')
<div class="cta" style="background-image: url({{ asset('public/uploads/'.$page_home->appointment_bg) }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cta-box text-center">
                    <h2>{{ __($page_home->appointment_title) }}</h2>
                    <p class="mt-3">
                        {!! nl2br(e($page_home->appointment_text)) !!}
                    </p>
                    <a href="{{ $page_home->appointment_btn_url }}" class="btn btn-primary">{{ __($page_home->appointment_btn_text) }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif



@if($page_home->latest_blog_status == 'Show')
<div class="blog-area">
    <div class="container wow fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->latest_blog_title) }}</h2>
                    <h3>{{ __($page_home->latest_blog_subtitle) }}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="blog-carousel owl-carousel">

                    @foreach($blogs as $row)
                    <div class="blog-item wow fadeInUp">
                        <a href="{{ url('blog/'.$row->blog_slug) }}">
                            <div class="blog-image">
                                <img src="{{ asset('public/uploads/'.$row->blog_photo) }}" alt="Blog Image">
                                <div class="date">
                                    <h3>{{ \Carbon\Carbon::parse($row->created_at)->format('d') }}</h3>
                                    <h4>{{ \Carbon\Carbon::parse($row->created_at)->format('M') }}</h4>
                                </div>
                            </div>
                        </a>
                        <div class="blog-text">
                            <h3><a href="{{ url('blog/'.$row->blog_slug) }}">{{ __($row->blog_title) }}</a></h3>
                            <p>
                                {!! nl2br(e($row->blog_content_short)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('blog/'.$row->blog_slug) }}">{{__('Read More')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if($page_home->newsletter_status == 'Show')
<div class="newsletter-area" style="background-image: url({{ asset('public/uploads/'.$page_home->newsletter_bg) }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 newsletter">
                <div class="newsletter-text wow fadeInUp">
                    <h2>{{ __($page_home->newsletter_title) }}</h2>
                    <p>
                        {!! nl2br(e($page_home->newsletter_text)) !!}
                    </p>
                </div>
                <div class="newsletter-button wow fadeInUp">
                    <form action="{{ route('front.subscription') }}" method="post" class="frm_newsletter justify-content-center">
                        @csrf
                        <input type="text" placeholder="Enter Your Email" name="subs_email">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if($page_home->partner_status == 'Show')
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ __($page_home->partner_title) }}</h2>
                    <h3>{{ __($page_home->partner_subtitle) }}</h3>
                </div>
            </div>
        </div>
        <div class="service-carousel owl-carousel">
            @foreach($partners as $row)
            <div class="">
                <div class="">
                    <div class="icon">
                        <a target="_blank" href="{{ ($row->partner_url) }}"><img style="height: 100px;" src="{{ asset('public/uploads/'.$row->partner_photo) }}" alt=""></a>
                    </div>                   
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

@endsection