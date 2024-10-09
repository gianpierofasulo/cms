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
        
        <!-- CEO -->
        <div class="row team pt_0 pb_40">
              @foreach($senior as $row)
             @if($row->category_id == '1')
             <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3 class="text-center text-uppercase">{{ __($row->designation) }}</h3>
                </div>
            </div>
             @endif
              @endforeach
            @foreach($senior as $row)
            @if($row->category_id == '1')
            <div class="col-md-4 wow fadeInUp ">

                     <div class="feature-item wow fadeInUp card">
                            <div class="team-photo">
                    <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                        <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                    </a>
                </div>
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

               <div class="col-md-8 wow fadeInUp">
              <div class="card">  
                <div class="col-md-12">
                <h6><b>{{__('Address')}}</b> <p>{!! nl2br(e($row->address)) !!}</p></h6>
                <h6><b>{{__('Email')}}</b> <p>{{ $row->email }}</p></h6>
                 <h6><b>{{__('Phone Number')}}</b> <p>{{ $row->phone }}</p></h6>
                 <h6><b>{{__('CEO Message')}}</b>

                 @if($row->detail == '')
                No Message Found.
                @else
                {!! $row->detail !!}
                @endif
            </div></div>
        </div>
                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $senior->links() }}
                </div>
            </div>

             <!-- Operation -->
              <div class="row team pt_0 pb_40">
              @foreach($senior as $row)
             @if($row->category_id == '2')
             <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3 class="text-center text-uppercase">{{ __($row->designation) }}</h3>
                </div>
            </div>
             @endif
              @endforeach
            @foreach($senior as $row)
            @if($row->category_id == '2')
              <div class="col-md-8 wow fadeInUp">
              <div class="card">  
                <div class="col-md-12">
                <h6><b>{{__('Address')}}</b> <p>{!! nl2br(e($row->address)) !!}</p></h6>
                <h6><b>{{__('Email')}}</b> <p>{{ $row->email }}</p></h6>
                 <h6><b>{{__('Phone Number')}}</b> <p>{{ $row->phone }}</p></h6>
                
            </div></div>
        </div>
            <div class="col-md-4 wow fadeInUp ">

                     <div class="feature-item wow fadeInUp card">
                        <div class="team-photo">
                    <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                        <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                    </a>
                </div>
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

             
                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $senior->links() }}
                </div>
            </div>

             <!-- Finance/Resource -->
              <div class="row team pt_0 pb_40">
              @foreach($senior as $row)
             @if($row->category_id == '3')
             <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3 class="text-center text-uppercase">{{ __($row->designation) }}</h3>
                </div>
            </div>
             @endif
              @endforeach
            @foreach($senior as $row)
            @if($row->category_id == '3')
            <div class="col-md-8 wow fadeInUp">
              <div class="card">  
                <div class="col-md-12">
                <h6><b>{{__('Address')}}</b> <p>{!! nl2br(e($row->address)) !!}</p></h6>
                <h6><b>{{__('Email')}}</b> <p>{{ $row->email }}</p></h6>
                 <h6><b>{{__('Phone Number')}}</b> <p>{{ $row->phone }}</p></h6>
                </div></div>
            </div>
            <div class="col-md-4 wow fadeInUp ">

                     <div class="feature-item wow fadeInUp card">
                    <div class="team-photo">
                    <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                        <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                    </a>
                </div>
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

                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $senior->links() }}
                </div>
            </div>

            <!-- IT -->
             <div class="row team pt_0 pb_40">
             @foreach($senior as $row)
             @if($row->category_id == '4')
             <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3 class="text-center text-uppercase">{{ __($row->designation) }}</h3>
                </div>
            </div>
             @endif
              @endforeach
            @foreach($senior as $row)
            @if($row->category_id == '4')

            <div class="col-md-4 wow fadeInUp ">
                     <div class="feature-item wow fadeInUp card">
                    <div class="team-photo">
                    <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                        <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                    </a>
                </div>
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

              <div class="col-md-8 wow fadeInUp">
              <div class="card">  
                <div class="col-md-12">
                <h6><b>{{__('Address')}}</b> <p>{!! nl2br(e($row->address)) !!}</p></h6>
                <h6><b>{{__('Email')}}</b> <p>{{ $row->email }}</p></h6>
                 <h6><b>{{__('Phone Number')}}</b> <p>{{ $row->phone }}</p></h6>
                </div></div>
            </div>

                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $senior->links() }}
                </div>
            </div>

              <!-- Legal -->
               <div class="row team pt_0 pb_40">
             @foreach($senior as $row)
             @if($row->category_id == '5')
             <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3 class="text-center text-uppercase">{{ __($row->designation) }}</h3>
                </div>
            </div>
             @endif
              @endforeach
       
            @foreach($senior as $row)
            @if($row->category_id == '5')
            <div class="col-md-8 wow fadeInUp">
              <div class="card">  
                <div class="col-md-12">
                <h6><b>{{__('Address')}}</b> <p>{!! nl2br(e($row->address)) !!}</p></h6>
                <h6><b>{{__('Email')}}</b> <p>{{ $row->email }}</p></h6>
                 <h6><b>{{__('Phone Number')}}</b> <p>{{ $row->phone }}</p></h6>
                
                </div></div>
        </div>
            <div class="col-md-4 wow fadeInUp ">
                     <div class="feature-item wow fadeInUp card">
                    <div class="team-photo">
                    <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                        <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                    </a>
                </div>
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

            
                @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $senior->links() }}
                </div>
            </div>
 <div class="row team pt_0 pb_40">
            <!-- Audit -->
             @foreach($senior as $row)
             @if($row->category_id == '6')
             <div class="col-md-12">
                <div class="heading wow fadeInUp">
                   <h3 class="text-center text-uppercase">{{ __($row->designation) }}</h3>
                </div>
            </div>
             @endif
              @endforeach
       
            @foreach($senior as $row)
            @if($row->category_id == '6')

            <div class="col-md-4 wow fadeInUp ">
                     <div class="feature-item wow fadeInUp card">
                    <div class="team-photo">
                    <a href="{{ url('senior/'.$row->slug) }}" class="team-photo-anchor">
                        <img style="border-radius: 50%; width: 200px;height: 200px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('public/uploads/'.$row->photo) }}" alt="senior management photo">
                    </a>
                </div>
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

              <div class="col-md-8 wow fadeInUp">
              <div class="card">  
                <div class="col-md-12">
                <h6><b>{{__('Address')}}</b> <p>{!! nl2br(e($row->address)) !!}</p></h6>
                <h6><b>{{__('Email')}}</b> <p>{{ $row->email }}</p></h6>
                 <h6><b>{{__('Phone Number')}}</b> <p>{{ $row->phone }}</p></h6>
                </div></div>
            </div>

                @endif
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
