@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Logo</h1>
<div class="row">
    <div class="col-md-6">
    <form action="{{ url('admin/setting/general/logo/update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="current_photo" value="{{ $general_setting->logo }}">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Existing Logo</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$general_setting->logo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Logo</label>
                    <div>
                        <input type="file" name="logo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
<div class="col-md-6">

    <form action="{{ url('admin/setting/general/favicon/update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="current_photo" value="{{ $general_setting->favicon }}">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Existing Favicon</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$general_setting->favicon) }}" alt="" class="w_100">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Favicon</label>
                    <div>
                        <input type="file" name="favicon">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection