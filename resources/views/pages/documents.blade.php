@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_document) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $documents->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $documents->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $documents->name !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="career">
                        @foreach ($document as $row)
                        @if($row->status == 'Public')
                        <div class="career-main-item">
                            <h3><i style='color: red;font-size: 21px;' class="{{ ($row->document_url) }}"></i> {{ $row->document_name }}</h3>
                            <div class="text">
                             <!-- <h4>Status: {{ $row->status }} </h4> -->
                              <div class="read-more">
                               <object class="magnific" data="{{ asset('public/uploads/'.$row->document_photo) }}" type="application/pdf" width="100%" height="100%">
                               </object>
                                 <!-- <a href="{{ asset('public/uploads/'.$row->document_photo) }}" class="btn btn-primary btn-sm" download><i class="fa fa-download"> </i>Dawnload</a> -->
                                <a href="{{ asset('public/uploads/'.$row->document_photo) }}" class="btn btn-primary btn-sm" download><i class="fa fa-download">Dawnload </i></a>
                              <a class="btn btn-success btn-sm" target="_blank" href="{{ asset('public/uploads/'.$row->document_photo) }}"><i class="fa fa-search-plus"> </i>View Full Screen</a>
                             </div>
                           </div>
                        </div>@endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
