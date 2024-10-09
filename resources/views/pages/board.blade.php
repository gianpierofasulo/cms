@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_board) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __($boards->name) }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __($boards->name) }}</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! __($boards->detail) !!}
                </div>
            </div>

             @foreach($board as $row)
             @if($row->id == '11')
           <div class="row team-single">
            <div class="col-md-4">
                <div class="team-member-photo"><a href="{{ url('board/'.$row->slug) }}" class="team-photo-anchor">
                    <img src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
                </div>
                 <div class="team-text">
                    <h4><a href="{{ url('board/'.$row->slug) }}">{{ $row->name }}</a></h4>
                    <p>{{ $row->designation }}</p>
                </div>
            </div>
                  
            <div class="col-md-7">
              <div class="card">  <div class="col-md-12">
                @csrf
                <h2 class="mt_30">Message From the Chairperson </h2>
                @if($row->board_message == '')
                No Message Found.
                @else
                {!! $row->board_message !!}
                @endif
            </div></div>
        </div>
    </div>
    @endif
    @endforeach
            <div class="row team pt_0 pb_40">
                @foreach($board as $row)

                @if($row->id != '11')

                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="team-item">
                            <div class="team-photo">
                                <a href="{{ url('board/'.$row->slug) }}" class="team-photo-anchor">
                                    <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="board management photo">
                                </a>
                            </div>
                            <div class="team-text">
                                <h4><a href="{{ url('board/'.$row->slug) }}">{{ __($row->name) }}</a></h4>
                                <p>{{ __($row->designation) }}</p>
                               

                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ $board->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
