@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Assign Permission</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Permission</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.role.permission.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Role ID</th>
                        <th>Role Page ID</th>
                        <th>Access Status</th>
                        <th>Operation</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $i=0; @endphp
                        @foreach($permission as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->role_id }}</td>
                            <td>{{ $row->role_page_id }}</td>
                            <td>{{ $row->access_status }}</td>
                            <td>{{ $row->operation }}</td>
                           <!-- <td>
                            <select name="access_status[]" class="form-control">
                                <option value="1" @if($row->access_status == '1') selected @endif>1</option>
                                <option value="0" @if($row->access_status == '0') selected @endif>0</option>
                            </select>
                            </td> -->
                            <td>
                                <a href="{{ URL::to('admin/role/permission/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                              <!--  <a href="{{ URL::to('admin/role/permission/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>-->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
