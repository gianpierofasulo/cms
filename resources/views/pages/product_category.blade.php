@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_product_detail) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>{{ __($category_single->category_name) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __($category_single->category_name) }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('layouts.sidebar_product')
            </div>

            <div class="col-lg-8 mx-auto">
              <ul class="list-group shadow">
               @if(count($product_items) == 0)
               <div class="text-danger">No Result is Found</div>
               @else
               @foreach($product_items as $row)
               <div class="list-group-item">
                  <!-- Custom content-->
                  <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                    <div class="media-body order-2 order-lg-1">
                      <h5 class="mt-0 font-weight-bold mb-2"><a href="{{ url('product/'.$row->product_slug) }}">{{ $row->product_name }}</a></h5>
                      <p class="font-italic text-muted mb-0 small"> {!! nl2br(e($row->product_content_short)) !!}</p>
                      <div class="d-flex align-items-center justify-content-between mt-1">
                        <h6 class="font-weight-bold my-2"><del style="color: red;">${{ $row->product_old_price }}</del> ${{ $row->product_current_price }}</h6>

                     
                        <!-- <a href="{{ url('product/'.$row->product_slug) }}" class="btn btn-primary btn-sm">Details</a> -->

                        @if($row->product_stock == 0)
                        <a href="javascript:void(0);" class="stock-empty w-100-p text-center">{{__('Stock is empty')}}</a>
                        @else
                        <form action="{{ route('front.add_to_cart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $row->id }}">
                            <input type="hidden" name="product_qty" value="1">
                            <button class="btn btn-warning btn-sm mt-2" type="submit">{{__('Add to Cart')}}</button>
                        </form>
                    @endif
                     <a href="{{ url('product/'.$row->product_slug) }}" class="btn btn-outline-primary btn-sm mt-2">Details</a>
          

                       
                    </div>
                </div>&nbsp;<img src="{{ asset('public/uploads/'.$row->  product_featured_photo) }}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
            </div>
        </div>
        @endforeach
        @endif
    </ul>
    {{-- <div>
       {{ $product_items->links() }}
   </div> --}}
</div>

</div>
</div>
</div>

@endsection
