@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_document) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $document_detail->document_name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('front.document') }}">Documents</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $document_detail->document_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-section single-project">

                        <div class="text mt_20">
                            <h2>Document Details</h2>
                            <p>
                                <img src="{{ asset('public/uploads/'.$document_detail->document_photo) }}" class="featured-photo">
                            </p>
                            <p>
                                {!!  $document_detail->document_url !!}
                            </p>

                            <h2 class="mt_30">Project Photos</h2>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">

                        <div class="widget">
                            <h3>All Projects</h3>
                            <div class="type-2">
                                <ul>
                                    @foreach($document_items as $row)
                                        <li>
                                            <img src="{{ asset('public/uploads/'.$row->project_featured_photo) }}">
                                            <a href="{{ url('project/'.$row->project_slug) }}">{{ $row->document_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection