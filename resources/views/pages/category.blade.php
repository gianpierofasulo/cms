@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_blog) }})">
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
                <div class="col-md-8">
                    <div class="single-section">

                        @foreach($blog_items as $row)
                            <div class="blog-item">
                                <div class="featured-photo">
                                    <a href="{{ url('blog/'.$row->blog_slug) }}"><img src="{{ asset('public/uploads/'.$row->blog_photo) }}"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="{{ url('blog/'.$row->blog_slug) }}">{{ __($row->blog_title) }}</a></h2>
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
                    <div>
                        {{ $blog_items->links() }}
                    </div>
                </div>
                <div class="col-md-4">
                    @include('layouts.sidebar_blog')
                </div>
            </div>
        </div>
    </div>

@endsection
