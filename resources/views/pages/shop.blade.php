@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_product) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ __($shop->name) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __($shop->name) }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-4">
            @include('layouts.sidebar_product')
        </div>
        <div class="col-md-8">
          @foreach($products as $row)
          <div class="row p-2 bg-white border rounded mt-2">
            <div class="col-md-3 mt-1"><a href="{{ url('product/'.$row->product_slug) }}"><img class="img-fluid img-responsive rounded product-image" src="{{ asset('public/uploads/'.$row->product_featured_photo) }}"></a></div>
            <div class="col-md-6 mt-1">
                <h5><a href="{{ url('product/'.$row->product_slug) }}">{{ __($row->product_name) }}</a></h5>
               <!--  <div class="d-flex flex-row">
                    <div class="ratings mr-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div><span>310</span>
                </div> -->
                <div class="mt-1 mb-1 spec-1">

                    <p class="text-justify text-truncate para mb-0">{{ __($row->product_content_short) }}<br><br></p></div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1 price">@if($row->product_old_price != '')
                            <del style="color: red;">${{ $row->product_old_price }}</del>
                        @endif</h4>
                        <span class="strike-text"> ${{ $row->product_current_price }}</span>
                    </div>
                    <h6 class="text-success">Stock Available: {{ $row->product_stock }}</h6>
                    <div class="d-flex flex-column mt-4">
                        <!-- <a href="{{ url('product/'.$row->product_slug) }}" class="btn btn-primary btn-sm">Details</a> -->

                        @if($row->product_stock == 0)
                        <a href="javascript:void(0);" class="stock-empty w-100-p text-center">{{__('Stock is empty')}}</a>
                        @else
                        <form action="{{ route('front.add_to_cart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $row->id }}">
                            <input type="hidden" name="product_qty" value="1">
                            <button class="btn btn-outline-primary btn-sm mt-2" type="submit">{{__('Add to Cart')}}</button>
                        </form>
                    @endif</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
