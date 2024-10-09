@extends('admin.admin_layouts')
@section('admin_content')
<h1 class="h3 mb-3 text-gray-800">Edit Color Information</h1>
 <div class="row">
   <div class="col-md-6">
        <form action="{{ url('admin/setting/general/color/update') }}" method="post">
            @csrf
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Theme Color</label>
                            <input type="text" name="theme_color" class="form-control jscolor" value="{{ $general_setting->theme_color }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>  
            </form>
    </div>

    <!-- for sidebar color -->
  <div class="col-md-6">  
    <form action="{{ url('admin/setting/general/color/sidebar_update') }}" method="post">
        @csrf
            <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Side Bar Color</label>
                            <input type="text" name="sidebar_color" class="form-control jscolor" value="{{ $general_setting->sidebar_color }}">
                        </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection