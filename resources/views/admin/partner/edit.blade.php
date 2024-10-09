@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Partner</h1>

    <form action="{{ url('admin/partner/update/'.$partner->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ $partner->partner_photo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Partner</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.partner.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="partner_name" class="form-control" value="{{ $partner->partner_name }}" autofocus>
                </div>
                
                <div class="form-group">
                    <label for="">Partner URL</label>
                    <input type="text" name="partner_url" class="form-control" value="{{ $partner->partner_url }}" autofocus>
                </div>                
                <div class="form-group">
                    <label for="">Existing Partner Photo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$partner->partner_photo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Partner Photo</label>
                    <div>
                        <input type="file" name="partner_photo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection