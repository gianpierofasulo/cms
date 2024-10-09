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


 <div class="page-content">
    <div class="container">
     <div class="row team-single">
            <div class="col-md-4">
                <div class="gallery-photo">
                        <div class="gallery-photo-bg"></div>
                    <img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" alt="">
                </div>
            </div>
                  
            <div class="col-md-7">
              <div class="card">  
                <div class="col-md-12">
                @csrf
                <!-- <h2 class="mt_30">{{_('about us')}} </h2> -->
                @if($about->detail == '')
                No Message Found.
                @else
                {!! $about->detail !!}
                @endif
            </div>
        </div>
        </div>

        <!-- Vission -->  
            <div class="col-md-7">
              <div class="card">  
                <div class="col-md-12">
                @csrf
                <!-- <h2 class="mt_30">{{_('Vision')}} </h2> -->
                @if($about->vision == '')
                No Message Found.
                @else
                {!! $about->vision !!}
                @endif
            </div>
        </div>
        </div>

        <div class="col-md-4">
            <div class="gallery-photo">
                        <div class="gallery-photo-bg"></div>
                    <img src="{{ asset('public/uploads/'.$about->vision_photo) }}" alt="">
                </div>
        </div>

        <!-- Mession -->  
         <div class="col-md-4">
            <div class="gallery-photo">
                        <div class="gallery-photo-bg"></div>
                    <img src="{{ asset('public/uploads/'.$about->mession_photo) }}" alt="">
                </div>
        </div>
            <div class="col-md-7">
              <div class="card">  
                <div class="col-md-12">
                @csrf
                <!-- <h2 class="mt_30">{{_('Mession')}} </h2> -->
                @if($about->mession == '')
                No Message Found.
                @else
                {!! $about->mession !!}
                @endif
            </div>
        </div>
        </div>

         <!-- Core Vale And Objective -->  
         <div class="col-md-6">
              <div class="card">  
                <div class="col-md-12">
                @csrf
                <!-- <h2 class="mt_30">{{_('Objective')}} </h2> -->
                @if($about->objective == '')
                No Message Found.
                @else
                {!! $about->objective !!}
                @endif
            </div>
        </div>
        </div>
            <div class="col-md-6">
              <div class="card">  
                <div class="col-md-12">
                @csrf
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
                @if($about->core_value == '')
                No Message Found.
                @else
                {!! $about->core_value !!}
                @endif
            </div>
        </div>
        </div>

       
    </div>
<!-- </div>
</div> -->




<!-- ============== -->

<!-- <div class="bg-light"> -->
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6 bg-light">
        <!-- <h1 class="display-4">About us page</h1> -->
        <p class="lead text-muted mb-0"> @csrf
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
                @if($about->detail == '')
                No Message Found.
                @else
                {!! $about->detail !!}
                @endif</p>
       
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" alt="" class="img-fluid"></div>
    </div>
  </div>
<!-- </div> -->

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
       
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <!-- <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="{{ asset('public/uploads/'.$about->mession_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4"> @csrf
                @if($about->mession == '')
                No Message Found.
                @else
                {!! $about->mession !!}
                @endif</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
    </div> -->
  </div>
</div>


<!-- --------Mession ------- -->

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
      </div>
      <!-- <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0"></div> -->
    </div>
    <div class="row align-items-center">
<div class="col-lg-5"><img src="{{ asset('public/uploads/'.$about->mession_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0">
      </div>
      <div class="col-lg-7 bg-light">
        <!-- <h2 class="font-weight-light"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i> Mession</h2> -->
        <h2 class="pity" style="margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;"><i class="fa fa-eye fa-2x mb-3 text-success"></i> Mession</h2>
        <p class="font-italic text-muted mb-4"> @csrf
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
                @if($about->mession == '')
                No Message Found.
                @else
                {!! $about->mession !!}
                @endif</p><!-- <a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a> -->
      </div>
       
    </div>

<!-- --------vission ------- -->

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
      </div>
      <!-- <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0"></div> -->
    </div>
    <div class="row align-items-center">
      
      <div class="col-lg-7 bg-light">
       <!--  <h2 class="font-weight-light"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i> Vision</h2> -->
        <h2 class="pity" style="margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;"><i class="fa fa-road fa-2x mb-3 text-primary"></i> Vision</h2>
        <p class="font-italic text-muted mb-4"> @csrf
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
                @if($about->vision == '')
                No Message Found.
                @else
                {!! $about->vision !!}
                @endif</p>
      </div>
      <div class="col-lg-5"><img src="{{ asset('public/uploads/'.$about->vision_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>


    <!-- --------Objective and core value ------- -->

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
      </div>
      <!-- <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ asset('public/uploads/'.$about->about_us_photo) }}" alt="" class="img-fluid mb-4 mb-lg-0"></div> -->
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto bg-light"> <h2 class="pity" style="margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i> Core Value</h2>
        <p class="font-italic text-muted mb-4"> @csrf
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
                @if($about->core_value == '')
                No Message Found.
                @else
                {!! $about->core_value !!}
                @endif</p></div>
      <div class="col-lg-6 bg-light">
        <h2 class="pity" style="margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i> Objective</h2>
        <p class="font-italic text-muted mb-4"> @csrf
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
                @if($about->objective == '')
                No Message Found.
                @else
                {!! $about->objective !!}
                @endif</p>
      </div>
    </div>


<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our team</h2>
        <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">John Tarly</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

    </div>
  </div>
</div>
</div>
</div>
@endsection

