@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Developer</h1>

    <form action="{{ url('admin/developer/update/'.$developer->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Developer</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.developer.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <!--<input type="text" name="name" class="form-control" value="{{ $developer->name }}" autofocus>-->
                    <div class="form-control">{{ $developer->name }} </div>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <!--<input type="text" name="slug" class="form-control" value="{{ $developer->slug }}">-->
                    <div class="form-control">{{ $developer->slug }} </div>
                </div>
                
                
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $developer->detail }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <!--<input type="text" name="facebook" class="form-control" value="{{ $developer->facebook }}">-->
                    
                    <div class="form-control">{{ $developer->facebook }} </div>
                </div>
                <div class="form-group">
                    <label for="">Twitter</label>
                    <!--<input type="text" name="twitter" class="form-control" value="{{ $developer->twitter }}">-->
                    <div class="form-control">{{ $developer->twitter }} </div>
                </div>
                <div class="form-group">
                    <label for="">LinkedIn</label>
                   <!-- <input type="text" name="linkedin" class="form-control" value="{{ $developer->linkedin }}">-->
                    <div class="form-control">{{ $developer->linkedin }} </div>
                </div>
                <div class="form-group">
                    <label for="">YouTube</label>
                    <!--<input type="text" name="youtube" class="form-control" value="{{ $developer->youtube }}">-->
                    <div class="form-control">{{ $developer->youtube }} </div>
                </div>
                <div class="form-group">
                    <label for="">Instagram</label>
                   <!-- <input type="text" name="instagram" class="form-control" value="{{ $developer->instagram }}">-->
                    <div class="form-control">{{ $developer->instagram }} </div>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <!--<input type="text" name="email" class="form-control" value="{{ $developer->email }}">-->
                    <div class="form-control">{{ $developer->email }} </div>
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <!--<input type="text" name="phone" class="form-control" value="{{ $developer->phone }}">-->
                    <div class="form-control">{{ $developer->phone }} </div>
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <!--<input type="text" name="website" class="form-control" value="{{ $developer->website }}"> -->
                      <div class="form-control ">{{ $developer->website }} </div>

                </div>
               
                <div class="form-group">
                    <label for="">Address</label>
                    <!--<textarea name="address" class="form-control h_100" cols="30" rows="10">{{ $developer->address }}</textarea>-->
                    <div class="form-control h_100">{{ $developer->address }} </div>
                </div>
                <div class="form-group">
                    <label for="">Existing Photo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$developer->photo) }}" alt="" class="w_150">
                    </div>
                </div>
                <!--<div class="form-group">
                    <label for="">Change Photo</label>
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>-->
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <!--<input type="text" name="seo_title" class="form-control" value="{{ $developer->seo_title }}">-->
                    <div class="form-control">{{ $developer->address }} </div>
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <!--<textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $developer->seo_meta_description }}</textarea>-->
                    <div class="form-control h_100">{{ $developer->address }} </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
