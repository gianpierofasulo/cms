@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Permision</h1>

    <form action="{{ url('admin/permission/update/'.$permission->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- <input type="hidden" name="id" value="{{ $permission->id }}"> -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Permision</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.permission.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
               
               <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Role ID *</label>
                            <select name="role_id" class="form-control">
                                @foreach($role as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $permission->role_id) selected @endif>{{ $row->role_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">role page id *</label>
                            <select name="role_page_id" class="form-control">
                                @foreach($rolepage as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $permission->role_page_id) selected @endif>{{ $row->page_title }}</option>
                                @endforeach
                            </select>
                        </div>

                    <div class="form-group">
                    <label for="">Access Status *</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="access_status" id="rr1" value="1" @if($permission->access_status == '1') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="access_status" id="rr2" value="0" @if($permission->access_status == '0') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr2">0</label>
                        </div>
                    </div>
                </div>



                </div>

            </div>
          
            <div class="card-body">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
