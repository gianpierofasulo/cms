@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit About Page Information</h1>

    <form action="{{ url('admin/page/about/update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $page_about->name }}">
                </div>

                 <input type="hidden" name="current_photo" value="{{ $page_about->about_us_photo }}">

                <div class="form-group">
                    <label for="">About us Existing Background</label>
                    <div><img src="{{ asset('public/uploads/'.$page_about->about_us_photo) }}" alt="" class="w_200"></div>
                </div>
                <div class="form-group">
                    <label for="">Change Background</label>
                    <div><input type="file" name="about_us_photo"></div>
                </div>  


                <!-- Mession image -->
                 <input type="hidden" name="mession_photo" value="{{ $page_about->mession_photo }}">

                <div class="form-group">
                    <label for="">Mession Existing Background</label>
                    <div><img src="{{ asset('public/uploads/'.$page_about->mession_photo) }}" alt="" class="w_200"></div>
                </div>
                <div class="form-group">
                    <label for="">Change Background</label>
                    <div><input type="file" name="mession_photo"></div>
                </div> 
                <!-- Vison Image -->
                 <input type="hidden" name="vision_photo" value="{{ $page_about->vision_photo }}">

                <div class="form-group">
                    <label for="">Vision Existing Background</label>
                    <div><img src="{{ asset('public/uploads/'.$page_about->vision_photo) }}" alt="" class="w_200"></div>
                </div>
                <div class="form-group">
                    <label for="">Change Background</label>
                    <div><input type="file" name="vision_photo"></div>
                </div> 


                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $page_about->detail }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Mession</label>
                    <textarea name="mession" class="form-control editor" cols="30" rows="10">{{ $page_about->mession }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Vison</label>
                    <textarea name="vision" class="form-control editor" cols="30" rows="10">{{ $page_about->vision }}</textarea>
                </div>

                 <div class="form-group">
                    <label for="">Objective</label>
                    <textarea name="objective" class="form-control editor" cols="30" rows="10">{{ $page_about->objective }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Core Value</label>
                    <textarea name="core_value" class="form-control editor" cols="30" rows="10">{{ $page_about->core_value }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Show" @if($page_about->status == 'Show') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Hide" @if($page_about->status == 'Hide') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $page_about->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_about->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
