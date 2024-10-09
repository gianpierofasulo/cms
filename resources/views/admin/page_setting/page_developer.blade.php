@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Developer Page Information</h1><h5 style="color: red">Sorry You Have Not Permission to Edit This Information</h5>

    <form action="{{ url('admin/page/developer/update') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                   <input type="text" name="name" class="form-control" value="{{ $page_developer->name }}">

                </div>
               <!-- <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $page_developer->detail }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Show" @if($page_developer->status == 'Show') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Hide" @if($page_developer->status == 'Hide') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                        </div>
                    </div>-->
                    <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $page_developer->seo_title }}">

                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_developer->seo_meta_description }}</textarea>

                    <!-- <div class="form-control h_100">{{ $page_developer->seo_meta_description }}</div> -->
                </div>
               <button type="submit" class="btn btn-success">Update</button>
            </div> 

            
                </div>
            </div>
            
        </div>
    </form>
@endsection
