@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Authorized Share Information</h1>
    <div class="row">
        <div class="col-md-6">
    <form action="{{ url('admin/setting/general/authorizedshare/update') }}" method="post">
        @csrf
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Total Authorized Share</label>
                            <input type="text" name="authorized_share" class="form-control" value="{{ $general_setting->authorized_share }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
          
    </form>
</div>
<div class="col-md-6">
    <form action="{{ url('admin/setting/general/pricepershare/update') }}" method="post">
        @csrf
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Price Per Share</label>
                            <input type="text" name="per_value" class="form-control" value="{{ $general_setting->per_value }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    </div>

@endsection