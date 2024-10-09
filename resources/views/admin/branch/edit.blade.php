@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Branch</h1>

    <form action="{{ url('admin/branch/update/'.$branch->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ $branch->photo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Branch</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.branch.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $branch->name }}" autofocus>
                </div>
                
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ $branch->location }}" autofocus>
                </div>  
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="telephone" class="form-control" value="{{ $branch->telephone }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Manager</label>
                    <input type="text" name="manager" class="form-control" value="{{ $branch->manager }}" autofocus>
                </div> 
                <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" name="level" class="form-control" value="{{ $branch->level }}" autofocus>
                </div> 
                 <div class="form-group">
                    <label for="">Latitude</label>
                    <input type="text" name="latitude" class="form-control" value="{{ $branch->latitude }}" autofocus>
                </div> 
                 <div class="form-group">
                    <label for="">Longtiude</label>
                    <input type="text" name="longtiude" class="form-control" value="{{ $branch->longtiude }}" autofocus>
                </div> 
                 

                <div class="form-group">
                    <label for="">Branch Content *</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $branch->detail }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Status *</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Open" @if($branch->status == 'Open') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr1">Open</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Closed" @if($branch->status == 'Closed') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr2">Closed</label>
                        </div>
                    </div>
                </div>
            </div>

                <div class="form-group">
                    <label for="">Existing Partner Photo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$branch->photo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Partner Photo</label>
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $branch->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $branch->seo_meta_description }}</textarea>
                </div>
            </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection