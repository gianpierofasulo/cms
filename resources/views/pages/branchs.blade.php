@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_branch) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __($branch_items->name) }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __($branch_items->name) }}</li>
                </ol>
            </nav>
        </div>
    </div>
@include('layouts.newslatter')
    <div class="page-content pt_60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $branch_items->detail !!}
                </div>
            </div>
           <!--  <div class="row">
                @foreach($branch as $row)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-item">
                        <div class="photo"><a href="{{ url('branch/'.$row->name) }}"><img src="{{ asset('public/uploads/'.$row->photo) }}"></a></div>
                        <div class="text">
                            <h3><a href="{{ url('branch/'.$row->name) }}">{{ __($row->name) }}</a></h3>
                            <div class="price">

                               <p>Telephone: {{ $row->telephone }}</p> 
                            </div>
                            <div class="cart-button">

                            <a class="btn btn-primary btn-arf" href="{{ url('branch/'.$row->name) }}">{{__('See More')}}</a>
                              

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-12">
                    {{ $branch->links() }}
                </div>
            </div> -->


            <div class="row"> 
                @foreach ($branch as $row)
                <div class="col-md-4">
                    <div class="career">
                        <div class="career-main-item"> <h3 class="text-center"><a href="{{ url('branch/'.$row->name) }}">{{ __($row->name) }}
                          <p>Telephone: {{ $row->telephone }}</p> 
                            <div class="row long">
                                <div class="col-md-12">
                                    <div class="btn btn-secondary btn-sm btn-block"><i class="fa fa-map-marker"></i> {{ __($row->location) }}</div><br>
                                </div>
                                <!-- <div class="col-md-12">
                                    <a href="{{ url('branch/'.$row->name) }}" class="btn btn-success btn-sm btn-block">{{__('See Details')}}</a>
                                </div> -->
                            </div>
                       </a></h3></div>
                       
                    </div>
                </div> 
                @endforeach
                   <div class="col-md-12">
                    {{ $branch->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection
