@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_search) }})">
    <div class="bg-page"></div>
    <div class="text">
        <h1>Search By: {{ $search_string }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $search_string }}</li>
            </ol>
        </nav>
    </div>
</div>    

<!-- ------------------ -->
<div class="container py-5">
  <div class="row">

    <!-- poduct side bar here -->
    
    <div class="col-lg-10 mx-auto">
      <ul class="list-group shadow">
         @if(count($product_items) == 0)
         <div class="text-danger">No Result is Found</div>
         @else
         @foreach($product_items as $row)
         <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2"><a href="{{ url('product/'.$row->product_slug) }}">{{ $row->product_name }}</a></h5>
              <p class="font-italic text-muted mb-0 small"> {!! nl2br(e($row->product_content_short)) !!}</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2"><del style="color: red;">${{ $row->product_old_price }}</del> ${{ $row->product_current_price }}</h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
              </ul>
              <a href="{{ url('product/'.$row->product_slug) }}" class="btn btn-primary btn-sm">Details</a>
          </div>
      </div><a href="{{ url('product/'.$row->product_slug) }}"><img src="{{ asset('public/uploads/'.$row->  product_featured_photo) }}" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2"></a> 
  </div>
</li>
@endforeach
@endif
</ul>
{{-- <div>
 {{ $product_items->links() }}
</div> --}}
</div>
</div>
</div>


@endsection
