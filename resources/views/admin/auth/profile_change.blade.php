@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Profile</h1>

    <div class="row">
        <!-- Photo Section  -->
        <div class="col-md-6">
            <form action="{{ url('admin/photo-change/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="current_photo" value="{{ $admin_data->photo }}">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Photo</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Existing Photo *</label>
                            <div>
                                <img src="{{ asset('public/uploads/'.$admin_data->photo) }}" alt="" class="w_150">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Change Photo *</label>
                            <div><input type="file" name="photo"></div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>        
        </div>
        <!-- personel info section -->

        <div class="col-md-6">
            <form action="{{ url('admin/profile-change/update') }}" method="post">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name *</label>
                            <input type="text" name="name" class="form-control" value="{{ $admin_data->name }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Email Address *</label>
                            <input type="text" name="email" class="form-control" value="{{ $admin_data->email }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>        
        </div>
        <!-- password -->
        <div class="col-md-6">
            <form action="{{ url('admin/password-change/update') }}" method="post">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Password</h6>
                    </div>
                    <div class="card-body">

                       <!--  <div class="form-group">
                            <label for="old_password">Old Password *</label>
                            <input type="password" name="old_password" id="old_password" class="form-control">
                        </div> -->

                        <div class="form-group">
                            <label for="">New Password *</label>
                            <input type="password" name="password" class="form-control" value="" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Retype Password *</label>
                            <input type="password" name="re_password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>        
        </div>

        <!-- ============Two Factor auth========= -->
         <div class="col-md-6">
            @if(Route::has('admin.toggleTwoFactor'))
            <form action="{{ route('admin.toggleTwoFactor') }}" method="post">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">🔏Edit Two Factor</h6>
                        <br>
                        <i>Note:please do not enable if you enable you protected to login in the system this is for upcoming on the next release</i>
                    </div>
                    <div class="card-body">

                      <div class="form-group">
                    <!-- <button class="btn btn-success" type="submit">
                        @if(is_object(session('id')) && session('id')->two_factor)
                            {{ __('Disable') }}
                        @else
                            {{ __('Enable') }}
                        @endif
                    </button> -->
                </div> 
                    </div>
                </div>
            </form>
            @endif        
        </div>

    </div>
   
@endsection
