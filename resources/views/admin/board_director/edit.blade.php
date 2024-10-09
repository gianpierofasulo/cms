@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Board Director</h1>

    <form action="{{ url('admin/board_director/update/'.$board_director->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Board Director</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.board_director.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                

                <div class="form-group">
                    <label for="">Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ $board_director->name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $board_director->slug }}">
                </div>
                <div class="form-group">
                    <label for="">Designation *</label>
                    <input type="text" name="designation" class="form-control" value="{{ $board_director->designation }}">
                </div>

                <div class="form-group">
                    <ul class="nav nav-pills mb-3 nav-doctor" id="pills-tab" role="tablist">
                        
                        <li class="nav-item">
                            <a class="nav-link btn-primary" id="pills-tab-2" data-toggle="pill" href="#pills-t-2" role="tab" aria-controls="pills-t-2" aria-selected="false">{{__('Click to Edit Board massages')}}</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content nav-doctor-content" id="pills-tabContent">
                        
                        <div class="tab-pane fade" id="pills-t-2" role="tabpanel" aria-labelledby="pills-tab-2">
                            <label for="">Massege</label>
                           <textarea name="board_message" class="form-control editor" cols="30" rows="10">{{ $board_director->board_message }}</textarea>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $board_director->detail }}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $board_director->email }}">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $board_director->phone }}">
                </div>
                                
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control h_100" cols="30" rows="10">{{ $board_director->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Existing Photo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$board_director->photo) }}" alt="" class="w_150">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Photo</label>
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
                    <input type="text" name="seo_title" class="form-control" value="{{ $board_director->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $board_director->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
