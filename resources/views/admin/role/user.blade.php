@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Admin Users</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Admin Users</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.role.user-create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Thumbnail</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admin_users as $row)
                        <tr>
                            @if($row->id != 1)
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('public/uploads/'.$row->photo) }}" alt="" class="w_100"></td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->role_name }}</td>
                            <td>
                                @endif
                                @if($row->id != 1)
                            <div class="filter-dropdown text-right">
                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                              <ul class="dropdown-menu">

                                    <a href="{{ URL::to('admin/role/user/edit/password/'.$row->id) }}" class="btn btn-success btn-sm btn-block"><i class="fas fa-key"></i> Change Password</a><hr class="dropdown-divider">
                                    <a href="{{ URL::to('admin/role/user/edit/'.$row->id) }}" class="btn btn-warning btn-sm btn-block"><i class="fas fa-edit"></i> Change Role</a><hr class="dropdown-divider">
                                    <a href="{{ URL::to('admin/role/user/delete/'.$row->id) }}" class="btn btn-danger btn-sm btn-block" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i> Delete</a>
                                </ul>
                            </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
