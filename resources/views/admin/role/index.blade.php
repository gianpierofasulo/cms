@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Roles</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Roles</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.role.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Role Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $row)
                        <tr>
                            @if($row->id != 1)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->role_name }}</td>
                            <td>
                                @endif
                                @if($row->id != 1)
                                <div class="filter-dropdown text-right">
                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                              <ul class="dropdown-menu">

                                    <a href="{{ URL::to('admin/role/access-setup/'.$row->id) }}" class="btn btn-primary btn-sm btn-block"><i class="fas fa-cubes"></i> Access Setup</a><hr class="dropdown-divider">
                                    <a href="{{ URL::to('admin/role/edit/'.$row->id) }}" class="btn btn-warning btn-sm btn-block"><i class="fas fa-edit"></i> Edit</a><hr class="dropdown-divider">
                                    <a href="{{ URL::to('admin/role/delete/'.$row->id) }}" class="btn btn-danger btn-sm btn-block" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i> Delete</a>
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
