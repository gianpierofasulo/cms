@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Senior Management</h1>

    <form action="{{ route('admin.senior_managemnts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Senior Management</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.senior_managemnts.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" autofocus>
                </div>

                 <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Category *</label>
                            <select name="category_id" class="form-control">
                                @foreach($management_category as $row)
                                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div> 
                <!-- <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
                </div> -->
                <div class="form-group">
                    <label for="">Designation *</label>
                    <input type="text" name="designation" class="form-control" value="{{ old('designation') }}">
                </div>

                <div class="form-group">
                    <ul class="nav nav-pills mb-3 nav-doctor" id="pills-tab" role="tablist">
                        
                        <li class="nav-item">
                            <a class="nav-link btn-primary" id="pills-tab-2" data-toggle="pill" href="#pills-t-2" role="tab" aria-controls="pills-t-2" aria-selected="false">{{__('Click to Add CEO massages')}}</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content nav-doctor-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade" id="pills-t-2" role="tabpanel" aria-labelledby="pills-tab-2">
                            <label for="">Massege</label>
                            <textarea name="ceo_message" class="form-control editor" cols="30" rows="10">{{ old('ceo_message') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ old('detail') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="{{ old('facebook') }}">
                </div>
                <div class="form-group">
                    <label for="">Twitter</label>
                    <input type="text" name="twitter" class="form-control" value="{{ old('twitter') }}">
                </div>
                <div class="form-group">
                    <label for="">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin') }}">
                </div>
                
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" name="instagram" class="form-control" value="{{ old('instagram') }}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" name="website" class="form-control" value="{{ old('website') }}">
                </div>
                
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control h_100" cols="30" rows="10">{{ old('address') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Photo *</label>
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
